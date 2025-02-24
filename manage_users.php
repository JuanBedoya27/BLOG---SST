<?php
session_start();
include('db.php');
include './HTML/nav.html';

// Verificar si el usuario es administrador
if (!isset($_SESSION['usuario_rol']) || $_SESSION['usuario_rol'] !== 'admin') {
    header("Location: login.php");
    exit();
}

// Variables para mensajes de error y éxito
$errorMsg = '';
$successMsg = '';

// Obtener usuario a editar si se pasa un ID en la URL
$edit_user = null;
if (isset($_GET['edit'])) {
    $user_id = $_GET['edit'];
    $query = "SELECT id, usuario, rol FROM users WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$user_id]);
    $edit_user = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Lógica para agregar, editar y eliminar usuarios
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : '';

    try {
        if ($user_id) {
            // Editar usuario
            if ($password) {
                // Si se ingresa nueva contraseña
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $query = "UPDATE users SET usuario = ?, contraseña = ?, rol = ? WHERE id = ?";
                $stmt = $pdo->prepare($query);
                $stmt->execute([$username, $hashed_password, $role, $user_id]);
            } else {
                // Sin cambiar contraseña
                $query = "UPDATE users SET usuario = ?, rol = ? WHERE id = ?";
                $stmt = $pdo->prepare($query);
                $stmt->execute([$username, $role, $user_id]);
            }
            $successMsg = 'Usuario actualizado correctamente.';
        } else {
            // Agregar nuevo usuario
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO users (usuario, contraseña, rol) VALUES (?, ?, ?)";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$username, $hashed_password, $role]);
            $successMsg = 'Usuario agregado correctamente.';
        }
    } catch (PDOException $e) {
        $errorMsg = 'Error al procesar la solicitud: ' . $e->getMessage();
    }

    header("Location: manage_users.php");
    exit();
}

if (isset($_GET['delete'])) {
    $user_id = $_GET['delete'];

    try {
        // Eliminar usuario
        $query = "DELETE FROM users WHERE id = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$user_id]);
        $successMsg = 'Usuario eliminado correctamente.';
    } catch (PDOException $e) {
        $errorMsg = 'Error al eliminar el usuario: ' . $e->getMessage();
    }

    header("Location: manage_users.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Usuarios</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="sst.css">
    <link rel="stylesheet" href="../GESTION DOCUMENTOS/CSS/style.css">
    <link rel="stylesheet" href="manage.css">
    <link rel="stylesheet" href="../GESTION DOCUMENTOS/CSS/nav.css">
</head>

<body>
    <main class="container-form">
        <h2>Gestionar Usuarios</h2>

        <!-- Botón de Volver -->
        <button onclick="window.history.back();" class="btn-back">Volver</button>

        <!-- Mostrar mensajes de error o éxito -->
        <?php if ($errorMsg): ?>
            <div class="alert alert-danger"><?php echo htmlspecialchars($errorMsg); ?></div>
        <?php endif; ?>
        <?php if ($successMsg): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($successMsg); ?></div>
        <?php endif; ?>

        <!-- Formulario para agregar/editar usuarios -->
        <form id="userForm" action="manage_users.php" method="post">
            <input type="hidden" name="user_id" id="user_id" value="<?php echo htmlspecialchars($edit_user['id'] ?? ''); ?>">

            <label for="username">Nombre de usuario:</label>
            <input type="text" name="username" id="username" value="<?php echo htmlspecialchars($edit_user['usuario'] ?? ''); ?>" required>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password">

            <label for="role">Rol:</label>
            <select name="role" id="role" required>
                <option value="usuario" <?php echo (isset($edit_user) && $edit_user['rol'] === 'usuario') ? 'selected' : ''; ?>>Usuario</option>
                <option value="admin" <?php echo (isset($edit_user) && $edit_user['rol'] === 'admin') ? 'selected' : ''; ?>>Administrador</option>
            </select>

            <input type="submit" value="Guardar Usuario" class="btn-submit">

            <!-- Botón de Cancelar, solo se muestra si se está editando -->
            <?php if ($edit_user): ?>
                <button type="button" class="btn-cancel" onclick="window.location.href='manage_users.php'">Cancelar</button>
            <?php endif; ?>
        </form>

        <!-- Tabla de usuarios -->
        <section class="users-list">
            <h2>Usuarios Existentes</h2>
            <table class="users-table">
                <thead>
                    <tr>
                        <th>Nombre de usuario</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Obtener todos los usuarios de la base de datos
                    $query = "SELECT * FROM users ORDER BY usuario ASC";
                    $stmt = $pdo->prepare($query);
                    $stmt->execute();
                    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC); 

                    foreach ($usuarios as $usuario):
                    ?>
                        <tr>
                            <td><?php echo htmlspecialchars($usuario['usuario']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['rol']); ?></td>
                            <td>
                                <a href="manage_users.php?edit=<?php echo htmlspecialchars($usuario['id']); ?>">Editar</a>
                                <a href="manage_users.php?delete=<?php echo htmlspecialchars($usuario['id']); ?>" onclick="return confirm('¿Estás seguro de eliminar este usuario?');">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>
<?php
session_start();
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['usuario'], $_POST['contraseña'])) {
    $usuario = trim($_POST['usuario']);
    $contraseña = $_POST['contraseña'];

    // Buscar el usuario en la base de datos
    $query = "SELECT * FROM users WHERE usuario = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$usuario]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($contraseña, $user['contraseña'])) {
        session_regenerate_id(true); // Protege contra secuestro de sesión
        $_SESSION['usuario_id'] = $user['id'];
        $_SESSION['usuario_rol'] = $user['rol']; // Almacena el rol del usuario en la sesión

        header("Location: index.php");
        exit;
    } else {
        $error = "Credenciales incorrectas.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../GESTION DOCUMENTOS/CSS/login.css">
</head>
<body>

    <!-- Logo y encabezado -->
    <div class="header">
        <div class="logo-container">
            <img src="https://www.elcarmendeviboral-antioquia.gov.co/sites/elcarmendeviboralantioquia/content/files/001180/58988_logo-alcaldia-el-carmen-de-viboral--300x300px2_200x200.png"
                alt="Escudo de El Carmen de Viboral" class="logo">
            <img src="../GESTION DOCUMENTOS/img/Logo.png" alt="Otro Logo" class="logo">
        </div>
    </div> 

    <!-- Contenedor del login (superpuesto al carrusel) -->
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <?php if (isset($error)): ?>
            <p class="error"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
        <?php endif; ?>
        <form action="login.php" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" required>
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>

    <script src="../GESTION DOCUMENTOS/js/carousel.js"></script>
</body>
</html>

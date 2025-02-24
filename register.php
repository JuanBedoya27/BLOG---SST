<?php
include 'db.php'; // Asegúrate de que la ruta al archivo db.php es correcta

$username = 'admin';
$password = password_hash('123456', PASSWORD_DEFAULT);
$rol = 'admin';


try {
    $sql = "INSERT INTO users (usuario, contraseña, rol) VALUES (:username, :password, :rol)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $username, 'password' => $password, 'rol' => $rol]);
    echo "Usuario creado exitosamente";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>


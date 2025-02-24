<?php
// Configuración de conexión PDO
$host = 'localhost';
$dbname = 'documentos';  // Tu base de datos
$username = 'root';      // Usuario de la base de datos en XAMPP
$password = '';          // Contraseña en blanco si usas XAMPP por defecto

// Conexión a la base de datos
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>

<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre_carpeta'])) {
    $nombre_carpeta = $_POST['nombre_carpeta'];

    // Cerrar la carpeta abierta previamente, si existe
    if (isset($_SESSION['carpeta_abierta'])) {
        unset($_SESSION['carpeta_abierta']);
        unset($_SESSION['hora_apertura']);
    }

    // Verificar si la carpeta ya existe
    $sql = "SELECT * FROM carpetas WHERE nombre = ? AND id_padre IS NULL";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nombre_carpeta]);
    $carpeta_existente = $stmt->fetch();

    if ($carpeta_existente) {
        header("Location: index.php?error=La carpeta '$nombre_carpeta' ya existe.");
    } else {
        // Insertar la nueva carpeta en la base de datos
        $sql = "INSERT INTO carpetas (nombre, id_padre) VALUES (?, NULL)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nombre_carpeta]);

        // Marcar la carpeta como abierta en la sesión y guardar la hora de apertura
        $_SESSION['carpeta_abierta'] = $nombre_carpeta;
        $_SESSION['hora_apertura'] = time(); // Guardar la hora de apertura en segundos
        header("Location: index.php?success=La carpeta '$nombre_carpeta' se ha creado y abierto exitosamente.");
    }
}
?>

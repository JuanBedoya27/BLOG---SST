<?php
// Incluir el archivo de conexión
include 'db.php'; 


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_subcarpeta'])) {
    $id_subcarpeta = $_POST['id_subcarpeta'];

    // Eliminar archivos asociados a la subcarpeta
    $sql_archivos = "SELECT archivo_path FROM archivos WHERE id_carpeta = ?";
    $stmt_archivos = $pdo->prepare($sql_archivos);
    $stmt_archivos->execute([$id_subcarpeta]);
    $archivos = $stmt_archivos->fetchAll();

    foreach ($archivos as $archivo) {
        if (file_exists($archivo['archivo_path'])) {
            unlink($archivo['archivo_path']);
        }
    }

    // Eliminar la subcarpeta de la base de datos
    $sql = "DELETE FROM carpetas WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id_subcarpeta]);

    // Redirigir de vuelta a la página principal con mensaje de éxito
    header("Location: index.php?success=La subcarpeta seleccionada se ha eliminado exitosamente.");
    exit;
} else {
    // Redirigir de vuelta a la página principal con mensaje de error
    header("Location: index.php?error=Solicitud inválida.");
    exit;
}
?>

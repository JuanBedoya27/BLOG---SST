<?php
include 'db.php'; 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Eliminar archivo de la base de datos
    $id_archivo = $_POST['id_archivo'];

    $sql = "SELECT archivo_path FROM archivos WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id_archivo]);
    $archivo = $stmt->fetch();

    if ($archivo) {
        // Eliminar archivo físicamente
        unlink($archivo['archivo_path']);

        // Eliminar archivo de la base de datos
        $sql_delete = "DELETE FROM archivos WHERE id = ?";
        $stmt_delete = $pdo->prepare($sql_delete);
        $stmt_delete->execute([$id_archivo]);

        header("Location: index.php?success=Archivo eliminado exitosamente.");
    } else {
        header("Location: index.php?error=Archivo no encontrado.");
    }
    exit;
} else {
    header("Location: index.php?error=Solicitud inválida.");
    exit;
}
?>

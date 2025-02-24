<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener los detalles del archivo
    $sql = "SELECT * FROM archivos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $archivo = $stmt->fetch();

    if ($archivo) {
        // Descargar archivo
        $ruta = $archivo['ruta'];
        $nombre = $archivo['nombre'];

        // Forzar la descarga
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $nombre . '"');
        header('Content-Length: ' . filesize($ruta));
        readfile($ruta);
        exit;
    } else {
        echo "Archivo no encontrado.";
    }
}
?>

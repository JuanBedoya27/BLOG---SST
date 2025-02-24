<?php
// Incluir el archivo de conexión
include 'db.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['archivos']) && isset($_POST['id_carpeta'])) {
    $id_carpeta = $_POST['id_carpeta'];
    $archivos = $_FILES['archivos'];

    for ($i = 0; $i < count($archivos['name']); $i++) {
        // Verificar si hubo errores en la subida
        if ($archivos['error'][$i] !== UPLOAD_ERR_OK) {
            echo "Error al subir el archivo " . htmlspecialchars($archivos['name'][$i]) . ".";
            continue;
        }

        // Obtener el nombre original del archivo
        $nombre_archivo = basename($archivos['name'][$i]);

        // Definir el directorio de destino
        $directorio_destino = 'uploads/' . $id_carpeta . '/';

        // Crear el directorio si no existe
        if (!is_dir($directorio_destino)) {
            mkdir($directorio_destino, 0777, true);
        }

        // Ruta completa del archivo en el servidor
        $ruta_archivo = $directorio_destino . $nombre_archivo;

        // Mover el archivo desde el directorio temporal al destino
        if (move_uploaded_file($archivos['tmp_name'][$i], $ruta_archivo)) {
            // Insertar información del archivo en la base de datos
            $sql = "INSERT INTO archivos (id_carpeta, nombre, archivo_path) VALUES (?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id_carpeta, $nombre_archivo, $ruta_archivo]);

            echo "Archivo subido exitosamente: " . htmlspecialchars($nombre_archivo) . ".<br>";
        } else {
            echo "Error al mover el archivo: " . htmlspecialchars($nombre_archivo) . ".<br>";
        }
    }
} else {
    echo "Solicitud inválida.";
}
?>

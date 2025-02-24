<?php
// Incluir el archivo de conexión
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre_subcarpeta']) && isset($_POST['id_padre'])) {
    $nombre_subcarpeta = $_POST['nombre_subcarpeta'];
    $id_padre = $_POST['id_padre'];

    // Verificar si la subcarpeta ya existe en la carpeta padre
    $sql = "SELECT * FROM carpetas WHERE nombre = ? AND id_padre = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nombre_subcarpeta, $id_padre]);
    $carpeta_existente = $stmt->fetch();

    if ($carpeta_existente) {
        echo json_encode(['error' => "La subcarpeta '$nombre_subcarpeta' ya existe."]);
    } else {
        // Insertar la nueva subcarpeta en la base de datos
        $sql = "INSERT INTO carpetas (nombre, id_padre) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nombre_subcarpeta, $id_padre]);
        echo json_encode(['success' => "La subcarpeta '$nombre_subcarpeta' se ha creado exitosamente."]);
    }
    exit;
} else {
    echo json_encode(['error' => "Solicitud inválida."]);
    exit;
}
?> ?


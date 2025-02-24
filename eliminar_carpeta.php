<?php
// Incluir el archivo de conexión
include 'db.php'; 


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_carpeta'])) {
    $id_carpeta = $_POST['id_carpeta'];

    // Verificar si la carpeta tiene subcarpetas
    $sql = "SELECT * FROM carpetas WHERE id_padre = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id_carpeta]);
    $subcarpetas = $stmt->fetchAll();

    if (count($subcarpetas) > 0) {
        header("Location: index.php?error=La carpeta seleccionada tiene subcarpetas. No se puede eliminar.");
    } else {
        // Eliminar la carpeta de la base de datos
        $sql = "DELETE FROM carpetas WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id_carpeta]);
        header("Location: index.php?success=La carpeta seleccionada se ha eliminado exitosamente.");
    }
    exit;
} else {
    header("Location: index.php?error=Solicitud inválida.");
    exit;
}
?>

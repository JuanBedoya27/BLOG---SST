<?php
// Incluir el archivo de conexión
include '../GESTION DOCUMENTOS/HTML/nav.html';
include 'db.php';

// Función recursiva para mostrar carpetas, subcarpetas y archivos
function mostrarEstructura($id_padre = null)
{
    global $pdo;

    // Obtener carpetas hijas del id_padre actual
    $sql = "SELECT * FROM carpetas WHERE id_padre " . ($id_padre ? "= ?" : "IS NULL") . " ORDER BY nombre ASC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($id_padre ? [$id_padre] : []);
    $carpetas = $stmt->fetchAll();

    if ($carpetas) {
        echo '<ul>';
        foreach ($carpetas as $carpeta) {
            echo '<li>';
            echo '<details>';
            echo '<summary>' . htmlspecialchars($carpeta['nombre']) . '</summary>';

            // Botón para eliminar la carpeta
            echo '<form class="eliminarCarpetaForm" action="eliminar_carpeta.php" method="POST" style="display:inline;">';
            echo '<input type="hidden" name="id_carpeta" value="' . $carpeta['id'] . '">';
            echo '<button type="submit">Eliminar Carpeta</button>';
            echo '</form>';

            // Botón para abrir el modal de subir archivo a la carpeta
            echo '<button onclick="abrirModal(\'modalSubirArchivo\', \'' . $carpeta['id'] . '\')">Subir Archivo</button>';

            // Botón para abrir el modal de crear subcarpeta
            echo '<button onclick="abrirModal(\'modalCrearSubcarpeta\', \'' . $carpeta['id'] . '\')">Crear Subcarpeta</button>';

            // Llamada recursiva para mostrar subcarpetas y archivos
            mostrarEstructura($carpeta['id']);

            // Lista de archivos en la carpeta actual
            $sql_archivos = "SELECT * FROM archivos WHERE id_carpeta = ? ORDER BY nombre ASC";
            $stmt_archivos = $pdo->prepare($sql_archivos);
            $stmt_archivos->execute([$carpeta['id']]);
            $archivos = $stmt_archivos->fetchAll();

            if ($archivos) {
                echo '<h4>Archivos</h4>';
                echo '<ul>';
                foreach ($archivos as $archivo) {
                    echo '<li>';
                    echo '<a href="' . htmlspecialchars($archivo['archivo_path']) . '" download>' . htmlspecialchars($archivo['nombre']) . '</a>';
                    echo '<form class="eliminarArchivoForm" action="eliminar_archivo.php" method="POST" style="display:inline;">';
                    echo '<input type="hidden" name="id_archivo" value="' . $archivo['id'] . '">';
                    echo '<button type="submit">Eliminar</button>';
                    echo '</form>';
                    echo '</li>';
                }
                echo '</ul>';
            }
            echo '</details>';
            echo '</li>';
        }
        echo '</ul>';
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Carpetas y Archivos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <!-- Contenedor de botones -->

        <div class="control-buttons">
            <button id="manageUsersBtn" class="btn-manage-users">Gestionar Usuarios</button>
            <button class="btn-manage-users" onclick="abrirModal('modalCrearCarpeta')">Crear Carpeta</button> <br>
        </div>

        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Buscar carpetas y archivos..." onkeyup="buscar()">
        </div>

        <!-- Estructura de carpetas y archivos -->
        <div id="carpetaEstructura">
            <?php mostrarEstructura(); ?>
        </div>
    </div>
    <div id="responseMessage"></div>

    <!-- Modal para crear carpeta principal -->
    <div id="modalCrearCarpeta" class="modal">
        <div class="modal-content">
            <span class="close" onclick="cerrarModal('modalCrearCarpeta')">&times;</span>
            <h2>Crear Nueva Carpeta Principal</h2>
            <form id="crearCarpetaForm" action="crear_carpeta.php" method="POST">
                <input type="text" name="nombre_carpeta" placeholder="Nombre de la carpeta principal" required>
                <button type="submit">Crear Carpeta</button>
            </form>
        </div>
    </div>

    <!-- Modal para crear subcarpeta -->
    <div id="modalCrearSubcarpeta" class="modal">
        <div class="modal-content">
            <span class="close" onclick="cerrarModal('modalCrearSubcarpeta')">&times;</span>
            <h2>Crear Nueva Subcarpeta</h2>
            <form id="crearSubcarpetaForm" action="crear_subcarpeta.php" method="POST">
                <input type="text" name="nombre_subcarpeta" placeholder="Nombre de la subcarpeta" required>
                <input type="hidden" name="id_padre" id="idPadreSubcarpeta">
                <button type="submit">Crear Subcarpeta</button>
            </form>
        </div>
    </div>

    <!-- Modal para subir archivo -->
    <div id="modalSubirArchivo" class="modal">
        <div class="modal-content">
            <span class="close" onclick="cerrarModal('modalSubirArchivo')">&times;</span>
            <h2>Subir Archivos</h2>
            <form id="subirArchivoForm" action="subir_archivo.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="archivos[]" multiple required>
                <input type="hidden" name="id_carpeta" id="idCarpetaArchivo">
                <button type="submit">Subir Archivos</button>
            </form>
        </div>
    </div>

    <script src="../GESTION DOCUMENTOS/principal.js"></script>
    <!-- <script src="../GESTION DOCUMENTOS/ajax.js"></script> -->
</body>

</html>
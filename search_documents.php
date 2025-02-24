<?php

function mostrarEstructura($id_padre = null)
{
    global $pdo;

    // Obtener el término de búsqueda
    $searchTerm = isset($_GET['search']) ? '%' . $_GET['search'] . '%' : null;

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
            echo '<form action="eliminar_carpeta.php" method="POST" style="display:inline;">';
            echo '<input type="hidden" name="id_carpeta" value="' . $carpeta['id'] . '">';
            echo '<button type="submit">Eliminar Carpeta</button>';
            echo '</form>';

            // Botón para abrir el modal de subir archivo a la carpeta
            echo '<button onclick="abrirModal(\'modalSubirArchivo\', \'' . $carpeta['id'] . '\')">Subir Archivo</button>';

            // Botón para abrir el modal de crear subcarpeta
            echo '<button onclick="abrirModal(\'modalCrearSubcarpeta\', \'' . $carpeta['id'] . '\')">Crear Subcarpeta</button>';

            // Llamada recursiva para mostrar subcarpetas y archivos
            mostrarEstructura($carpeta['id']);

            // Lista de archivos en la carpeta actual (filtrada por búsqueda)
            $sql_archivos = "SELECT * FROM archivos WHERE id_carpeta = ? " . ($searchTerm ? "AND nombre LIKE ?" : "") . " ORDER BY nombre ASC";
            $stmt_archivos = $pdo->prepare($sql_archivos);
            if ($searchTerm) {
                $stmt_archivos->execute([$carpeta['id'], $searchTerm]);
            } else {
                $stmt_archivos->execute([$carpeta['id']]);
            }
            $archivos = $stmt_archivos->fetchAll();

            if ($archivos) {
                echo '<h4>Archivos</h4>';
                echo '<ul>';
                foreach ($archivos as $archivo) {
                    echo '<li>';
                    echo '<a href="' . htmlspecialchars($archivo['archivo_path']) . '" download>' . htmlspecialchars($archivo['nombre']) . '</a>';
                    echo '<form action="eliminar_archivo.php" method="POST" style="display:inline;">';
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

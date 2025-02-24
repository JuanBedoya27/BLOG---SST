<?php
include 'db.php';

ob_start();
mostrarEstructura();
$response = ob_get_clean();

echo $response;
?>

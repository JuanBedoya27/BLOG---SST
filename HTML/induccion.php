<?php
include '../HTML/nav.html';

session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inducción</title>
    <link rel="stylesheet" href="../CSS/induccion.css">
    <link rel="stylesheet" href="../CSS/btn.css">
    <link rel="icon" href="/Escudo_de_El_Carmen_de_Viboral.png" type="image/png">
    <!-- <style>
        .content-section {
            display: none;
        }
    </style> -->
</head>

<body>
    <div id="navegacion"></div> <br>

    <section class="indice">
        <a href="contratista.php"> <button> Contratista </button></a>
        <a href="planta.php"> <button> Empleado de Planta </button></a>
    </section>

    <script src="/js/nav.js"></script>
</body>

</html>
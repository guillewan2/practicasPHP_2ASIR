<?php
session_start();

if (isset($_GET['borrar'])) {
    session_destroy();
    header('Location: practica2-index.php');
    exit();
}

if (!isset($_SESSION['nombre'])) {
    header('Location: practica2-index.php');
    exit();
}

$nombre = htmlspecialchars($_SESSION['nombre']);
$color_fondo = htmlspecialchars($_SESSION['color_fondo']);
$color_letra = htmlspecialchars($_SESSION['color_letra']);
$tipo_letra = htmlspecialchars($_SESSION['tipo_letra']);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Saludo Sesiones</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans|Oswald" rel="stylesheet">
    <style>
        body {
            background-color: <?php echo $color_fondo;
            ?>;
            color: <?php echo $color_letra;
            ?>;
            font-family: <?php echo $tipo_letra;
            ?>;
        }
    </style>
</head>

<body>
    <h1>Hola
        <?php echo $nombre; ?>
    </h1>
    <a href="?borrar=1" style="color: <?php echo $color_letra; ?>;">Borrar preferencias y volver</a>
</body>

</html>
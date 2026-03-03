<?php
if (isset($_GET['borrar'])) {
    setcookie('nombre', '', time() - 3600);
    setcookie('color_fondo', '', time() - 3600);
    setcookie('color_letra', '', time() - 3600);
    setcookie('tipo_letra', '', time() - 3600);
    header('Location: practica1-index.php');
    exit();
}

if (!isset($_COOKIE['nombre']) || !isset($_COOKIE['color_fondo']) || !isset($_COOKIE['color_letra']) || !isset($_COOKIE['tipo_letra'])) {
    header('Location: practica1-index.php');
    exit();
}

$nombre = htmlspecialchars($_COOKIE['nombre']);
$color_fondo = htmlspecialchars($_COOKIE['color_fondo']);
$color_letra = htmlspecialchars($_COOKIE['color_letra']);
$tipo_letra = htmlspecialchars($_COOKIE['tipo_letra']);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Saludo</title>
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
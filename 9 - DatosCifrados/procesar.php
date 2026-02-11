<?php
/* Recogida de datos del HTML */
// FILTER_SANITIZE_STRING está obsoleto desde PHP 8.1.0, tenemos que usar htmlspecialchars o alguna otra función de saneamiento
$nombre = htmlspecialchars(filter_input(INPUT_POST, 'Nombre'));
$apellidos = htmlspecialchars(filter_input(INPUT_POST, 'Apellidos'));
$edad = htmlspecialchars(filter_input(INPUT_POST, 'Edad'));
$clave = htmlspecialchars(filter_input(INPUT_POST, 'Clave'));

/* Cifrado de los datos por metodo obsoleto - password hash - salt */
$password_cifrada = password_hash($clave, PASSWORD_BCRYPT);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Datos</h1>
    <p>Nombre: <?php echo $nombre; ?></p>
    <p>Apellidos: <?php echo $apellidos; ?></p>
    <p>Edad: <?php echo $edad; ?></p>
    <p>Clave cifrada: <?php echo $password_cifrada; ?></p>
</body>
</html>

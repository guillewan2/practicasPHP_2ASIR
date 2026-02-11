<?php
/*
Desarrollar un programa en PHP, tal que dado un usuario y una clave tendrá que comprobar si dicho

usuario se encuentra en la BD. Para simular la base de datos, crea 4 usuarios hardcodeados y la aplicación

comprobará si es alguno de estos
*/

$usuarios = [
    "admin" => "1234",
    "user1" => "abcd",
    "user2" => "pass",
    "guille" => "torres",
    "frodo" => "bolson"
];

$mensaje = "";

$usuario = (string)filter_input(INPUT_POST, 'usuario');
$clave = (string)filter_input(INPUT_POST, 'clave');

foreach ($usuarios as $user => $pass) {
    if ($usuario == $user && $clave == $pass) {
        $mensaje = "Hola, $usuario!";
        break;
    } else {
        $mensaje = "Usuario o clave incorrectos";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $usuario ?> </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
    </style>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1><?= $mensaje ?></h1>
</body>
</html>
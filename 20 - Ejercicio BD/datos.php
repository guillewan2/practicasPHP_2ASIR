<?php
$usuario = "guille";
$contra = "1234";
$basedatos = "prueba2";
$direccion = "192.168.72.86";

$mysql = new mysqli(
    $direccion,
    $usuario,
    $contra,
    $basedatos
);
?>
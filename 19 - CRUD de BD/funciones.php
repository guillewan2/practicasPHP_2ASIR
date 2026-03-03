<?php
// Inicializamos el objeto MySQL
$mysql = new mysqli(
    $direccion,
    $usuario,
    $pass,
    $database
);
if ($mysql->connect_error) {
    $errores[] = "Error al conectar a la base de datos: {$mysql->connect_errno}";
}

/* ---------------------------------*/

function insertarBD()
{
    global $mysql, $nombre, $apellido, $email, $fecha_nacimiento;
    $mysql->query("INSERT into estudiantes (nombre, apellido, email ) values ('$nombre', '$apellido', '$email');");
}

function resultado_Estudiantes() : mysqli_result{ // Solo quiero que devuelva eso
    global $mysql;
    $res = $mysql->query("SELECT id_estudiante,nombre,apellido,email FROM estudiantes");

    return $res;

}

function imprimir_query(mysqli_result $result) {
    while ($fila = $result->fetch_assoc()){
        ?>
        <h1>Estudiante <?= utf8_encode($fila['id_estudiante']) ?>: <?= utf8_encode($fila['nombre']). " ". utf8_encode($fila['apellido'])?></h1>        
        <h2>Email <?= $fila['email'] ?></h2>
        <?php 
    }
}


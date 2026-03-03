<?php
require_once "datos.php";
require_once "funciones.php";
/* CRUD DE BASE DE DATOS CON MYSQLI */

if (isset($_GET['do'])) {
    switch (htmlspecialchars($_GET['do'])) {
        case 'insert':
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                insertarBD();

            } else {
                include_once "src/insert.php";
            }
        default:
            break;
    }
} else {
    imprimir_query(resultado_Estudiantes());
}



$mysql->close(); // Se cierra la conexión a la base de datos cuando nos se vaya a usar.

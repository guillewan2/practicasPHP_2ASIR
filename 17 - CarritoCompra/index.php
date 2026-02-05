<?php
// Guillermo Torres
// Date: Fri 30 Jan 2026
// Time: 18:14
// Description: 'Carrito de la compra a través de cookies'
//  Distribution: Arch Linux

/* Importar functions.php e iniciar sesión de cookies */

session_start();
require "data/functions.php";
/*----------------------------------------------------*/


if (isset($_GET['action'])){
    $action = htmlspecialchars($_GET['action']);
    switch($action) {
        case 'cart':
            require_once "templates/cart.php";
            exit;
        case 'addToCart':
            $id = htmlspecialchars($_GET['id']);
            addtoCart($id, $productos); // Funcion definida en functions.php
            require_once "templates/productos.php";
            // USAR $_SERVER["REQUEST_URI"] y alguna funcion para limpiar la URL.
            exit;
        default:
            require_once "templates/productos.php";
            break;
    }
} else {
    require_once "templates/productos.php";
}

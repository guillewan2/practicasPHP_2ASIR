<?php
// Guillermo Torres
// Date: Fri 30 Jan 2026
// Time: 18:14
// Description: 'Carrito de la compra a través de cookies'
//  Distribution: Arch Linux

/* Importar functions.php e iniciar sesión de cookies */
require "data/functions.php";

session_start();
/*----------------------------------------------------*/


if (isset($_GET['action'])){
    $action = htmlspecialchars($_GET['action']);
    switch($action) {
        case 'cart':
            require_once "templates/cart.php";
            exit;
        case 'addToCart':
            $id = htmlspecialchars($_GET['id']);
            addtoCart($id); // Funcion definida en functions.php
    }
} else {
    require_once "templates/productos.php";
}

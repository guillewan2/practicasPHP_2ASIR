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
            // ¿strtok?
            exit;
        case 'delete':
            $id = htmlspecialchars($_GET['id']);
            deleteProduct($_SESSION['cart'],$id);
            switch($_GET['from']){
                case 'cart':
                    require_once "templates/cart.php";
                    exit;
                default:
                    break;
            }

        default:
            require_once "templates/productos.php";
            break;
    }
} else {
    require_once "templates/productos.php";
}

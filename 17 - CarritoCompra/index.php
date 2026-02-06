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


if (isset($_GET['action'])) {
    $action = htmlspecialchars($_GET['action']);
    switch ($action) {
        case 'cart':
            if (countCart()!=0) {
                require "templates/cart.php";
            } else {
                require "templates/productos.php";
            }
            exit;
        case 'addToCart':
            $id = htmlspecialchars($_GET['id']);
            addtoCart($id, $productos); // Funcion definida en functions.php
            redirectnoGet();
            exit;
        case 'delete':
            $id = htmlspecialchars($_GET['id']);
            deleteProduct($_SESSION['cart'], $id);
            switch ($_GET['from']) {
                case 'cart':
                    redirectnoGet('?action=cart');
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

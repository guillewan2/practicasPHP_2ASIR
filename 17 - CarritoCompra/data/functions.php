<?php
include_once "variables.php";
global $productos;

function addtoCart(int $id, array $productos) {
    // No sabia que se podia definir aqui el tipo de dato
    // como en otros lenguajes de programación, curioso.
    if (isset($productos[$id])){
        $_SESSION['cart'][]=$id;
    }
}

function countCart(): int{ // Devuelve un entero

    // Función que contará los elementos que hay en el 
    // carrito

    if(!isset($_SESSION['cart'])){
        return 0;
    } else {
        return count($_SESSION['cart']);
    }
}

function printCart() {
    // Para depuración
    echo "Elementos: ";
    foreach($_SESSION['cart'] as $ids) {
        echo "$ids ";
    }
}
?>


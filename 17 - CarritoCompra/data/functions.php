<?php
include_once __DIR__."variables.php";

function addtoCart(int $id) {
    // No sabia que se podia definir aqui el tipo de dato
    // como en otros lenguajes de programación, curioso.
    if (isset($productos[$id])){
        $_SESSION['cart'][]=$id;
    }
}

?>
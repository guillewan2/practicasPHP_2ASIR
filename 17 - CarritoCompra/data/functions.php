<?php
include_once "variables.php";
global $productos;

function addtoCart(int $id, array $productos)
{
    // No sabia que se podia definir aqui el tipo de dato
    // como en otros lenguajes de programación, curioso.
    if (isset($productos[$id])) {
        $_SESSION['cart'][] = $id;
    }
}

function countCart(): int
{ // Devuelve un entero

    // Función que contará los elementos que hay en el 
    // carrito

    if (!isset($_SESSION['cart'])) {
        return 0;
    } else {
        return count($_SESSION['cart']);
    }
}

function printCart()
{
    // Para depuración
    echo "Elementos: ";
    foreach ($_SESSION['cart'] as $ids) {
        echo "$ids ";
    }
}

function cartPrice(array $productos): float
{
    $price = 0;
    foreach ($_SESSION['cart'] as $ids) {
        $price += $productos[$ids]["price"];
    }
    return $price;
}

function calculoRepeticiones(array $array): array
{
    foreach ($array as $key => $value) {
        if (!isset($repeticiones[$value])) {
            $repeticiones[$value]=1;
        } else {
            $repeticiones[$value]+=1;
        }
    }

    return $repeticiones;
    
}

function imprimirRepeticiones(array $repeticiones): void {
    foreach ($repeticiones as $key => $repeticion) {
        echo "$key => $repeticion | ";
    }
}

function deleteProduct(array &$array, int $id) {
    foreach ($array as $key => $element) {
        if ($element == $id) {
            unset($array[$key]);
        }
    }
}

function removeGet(): string {
    $url="https://www.bing.com/search?q=string+modify&PC=U316&FORM=CHROMN";
    return substr($url,0,strpos($url, "?"));
}

echo removeGet();


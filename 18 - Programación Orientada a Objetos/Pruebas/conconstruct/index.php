<?php
require_once "producto.php";

function imprimirProducto()
{ // PROCEDIMIENTO
    global $productos;
    foreach ($productos as $producto) {
        printf("\nPRODUCTO: %s", $producto->getNombre());
        printf("\nPRECIO: %.2f", $producto->getPrecio());
        printf("\n-----------------------------");
    }
    printf("\n");
}
function precioRandom()
{
    return mt_rand(1, 100) + (mt_rand(1, 99) / 100);
}


$productos[1] = new Producto("Alfombrilla de ratón", precioRandom());
$productos[2] = new Producto("Mascarilla para el pelo", precioRandom());
$productos[3] = new Producto("Algo", precioRandom());
$productos[4] = new Producto("Otra cosa", precioRandom());

printf("-----------------------------\n");
printf("----------PRODUCTOS----------\n");
printf("-----------------------------");
imprimirProducto();
printf("\n\n\n\n");

foreach ($productos as $producto) {
    $producto->setPrecio(mt_rand(1, 100) + (mt_rand(1, 99) / 100));
}

printf("-----------------------------\n");
printf("----------PRODUCTOS----------\n");
printf("----PRECIOS ACTUALIZADOS-----\n");
printf("-----------------------------");
imprimirProducto();



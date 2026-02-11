<?php
require_once "producto.php";

function imprimirProducto(){ // PROCEDIMIENTO
    global $productos;
    foreach ($productos as $producto) {
    printf("\nPRODUCTO: %s", $producto->nombre);
    printf("\nPRECIO: %.2f", $producto->getPrecio());
    printf("\n-----------------------------");
}
}

for ($i = 1; $i <= 4; $i++) {
    $productos[$i] = new Producto(); // Declaramos nuevos objetos en array
}
$productos[1]->nombre = "Alfombrilla de ratón";
$productos[2]->nombre = "Mascarilla para el pelo";
$productos[3]->nombre = "Algo";
$productos[4]->nombre = "Otra cosa";

printf("-----------------------------\n");
printf("----------PRODUCTOS----------\n");
printf("-----------------------------");
imprimirProducto();
printf("\n\n\n\n");

foreach ($productos as $producto) {
    $producto->setPrecio(mt_rand(1,100)+(mt_rand(1,99)/100));
    }
    
    printf("-----------------------------\n");
printf("----------PRODUCTOS----------\n");
printf("----PRECIOS ACTUALIZADOS-----\n");
printf("-----------------------------");
imprimirProducto();




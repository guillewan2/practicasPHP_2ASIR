<?php
// Guillermo Torres
// Date: Fri 30 Jan 2026
// Time: 18:14
// Description: 'Carrito de la compra a través de cookies'
//  Distribution: Arch Linux

$productos = [
    1 => [
        "name" => "Nico Yazawa - Movie Fanart",
        "description" => "Fanart de Nico Yazawa con su vestido de 'Sunny Day Song'",
        "image" => "https://fantasymist.es/fanarts/webp/Nico_Yazawa_Movie.webp",
        "price" => 10.5,

    ],
    2 => [
        "name" => "Dibujo fanart de Rice Shower de Uma Musume",
        "description" => "Dibujo vertical A4 Fanart del personaje Rice Shower del videojuego/anime Uma Musume en su traje de instituto.",
        "image" => "https://fantasymist.es/fanarts/webp/1000044395_3.webp",
        "price" => 10999.01,

    ],

    3 => [
        "name" => "FNAF 2 Movie Dibujo Fanart",
        "description" => "Five night at Freddy's 2 La Película Fanart Dibujo de Puppet con los animatrónicos Toy",
        "image" => "https://fantasymist.es/fanarts/webp/1000040699.webp",
        "price" => 2.7,

    ],
    4 => [
        "name" => "¡Bienvenido Freddy!",
        "description" => "Freddy Fazbear de cuerpo completo a mi estilo Cartoon",
        "image" => "https://fantasymist.es/fanarts/webp/freddy_body.webp",
        "price" => 10.5,

    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="/17 - CarritoCompra/css/style.css">
</head>

<body>
    <!-- TIENDAAAAA -->
    <div class="tienda">
        <h1>Tienda</h1>
        <?php foreach ($productos as $producto): ?>
            <div class="producto">
                <div class="imagen">
                    <img src="<?= $producto["image"] ?>" alt="<?= $producto["description"] ?>" width="300px">
                </div>
                <h2><?= $producto["name"] ?></h2>
                <p><?= $producto["description"] ?>
                <!-- AQUI ME HE PARADO --> 
                <p class="price"><?= number_format($producto["price"], 2) ?>€</p>
                <form method="post" action="/?action=addToCart&id=<?= $id ?>"
                    style="display: inline"> 
                    <button class="btn btn-primary btn-sm">Añadir al carrito uwu</button>
                </form>
            </div>
        <?php endforeach; ?>

    </div>
</body>

</html>
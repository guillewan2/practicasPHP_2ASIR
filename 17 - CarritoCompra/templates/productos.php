<?php include_once "data/variables.php";

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
        <?php
        foreach ($productos as $idProducto => $producto):
        ?>
            <div class="producto">
                <div class="imagen">
                    <img src="<?= $producto["image"] ?>" alt="<?= $producto["description"] ?>" width="300px">
                </div>
                <h2><?= $producto["name"] ?></h2>
                <p><?= $producto["description"] ?>
                <p class="price"><?= number_format($producto["price"], 2) ?>€</p>
                <form method="post" action="17 - CarritoCompra?action=addToCart&id=<?= $idProducto ?>"
                    style="display: inline">
                    <button class="btn btn-primary btn-sm">Añadir al carrito</button>
                    <p class="idproducto">ID: <?= $idProducto ?> </p>
                </form>
            </div>
        <?php endforeach;
        printCart();
        ?>
    </div>

    <div class="pricedetails">
        <h2>Precio total: <?= cartPrice($productos) ?>€</h2>
        <h3><a href="/17 - CarritoCompra?action=cart">Ver el carrito</a></h3>
        <p class="encarrito">En carrito: <?= countCart() ?></p>
    </div>
</body>

</html>
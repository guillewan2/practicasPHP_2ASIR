<?php
require_once __DIR__ . '/../data/variables.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compra</title>
    <link rel="stylesheet" href="/17 - CarritoCompra/css/style.css">
</head>
<body>

<h1>CARRIRTO DE LA COMPRA</h1>
<?php
$cartElements = calculoRepeticiones($_SESSION['cart']);
foreach ($cartElements as $num => $repes):?>
    <div class="cart-object">
        <div class="imagen">
            <img src="<?= $productos[$num]["image"] ?>" alt="<?= $productos[$num]["description"]?>" width="100">
        </div>
        <h3><?= $productos[$num]["name"] ?></h3>
        <p class="description"><?= $productos[$num]["description"] ?></p>
        <p class="productoscarro">Productos en carrito: <?= $repes ?></p>
        <p class="borrar"><a href="?action=delete&id=<?= $num ?>&from=cart">Borrar producto</a></p>
    </div>
    <?php 
    endforeach;
    ?>
    <div class="pricedetails">
        <h2>Total: <?= cartPrice($productos) ?>€</h2>
        <h3><a href="/17 - CarritoCompra">Volver a la tienda</a></h3>
    </div>
</body>
</html>
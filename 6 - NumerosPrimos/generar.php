<?php
// Generación de números primos hasta un 
// número límite

$limite = (int)filter_input(INPUT_POST, 'limite', FILTER_SANITIZE_NUMBER_INT);
$primos = [];
for ($num = 2; $num <= $limite; $num++) {
    $esPrimo = true;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $esPrimo = false;
            break;
        }
    }
    if ($esPrimo) {
        $primos[] = $num;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números primos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #fff;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Tus números primos hasta el <?= htmlspecialchars($limite) ?></h1>
    <ul>
        <?php
        foreach($primos as $primo):?>
            <li><?= $primo ?></li>
        <?php endforeach; ?>

    </ul>
</body>
</html>
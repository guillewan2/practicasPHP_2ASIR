<?php

$randomArray = [
    "Juan",
    "Paco",
    "Manolo",
    "Eustaquio",
    "Caballo",
    "Coche",
    "Juegos",
    "Ritmo",
    "PHP",
    "Pyhton"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Aleatorios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
            text-align: center;
        }
        h3 {
            color: #333;
        }
        h4 {
            color: #555;
        }
        a {
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h3>Array Indroducido: </h3>
    <h4>
        <?php
        foreach($randomArray as $array):
            echo "$array ";
        endforeach;
        ?>
    </h4>

    <h3>Array ordenado de forma ascendente</h3>
    <h4>
        <?php
        sort($randomArray);
        foreach($randomArray as $array):
            echo "$array ";
        endforeach;
        ?>
    </h4>
    <h3>Array aleatorio</h3>
    <h4>
        <?php
        shuffle($randomArray);
        foreach($randomArray as $array):
            echo "$array ";
        endforeach;
        ?>
    </h4>
    <a href="../index.php">Volver</a>
</body>
</html>
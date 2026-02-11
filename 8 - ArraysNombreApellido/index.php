<?php
// Guillermo Torres
// Date: Thu 27 Nov 2025
// Time: 13:03
// Description: 'Desarrollar un programa en PHP, tal que, dados dos arrays que contienen los nombres 
//               y los apellidos respectivamente, me retorne otro array en el cual se contengan los nombres 
//               y los apellidos'
//  Distribution: Arch Linux
?>

<?php

// Declaración de variables
$names = ["Frodo", "Guille", "Eren", "Kazuto", "Ash"];
$surnames = ["Bolsón", "Torres", "Yeager", "Kirigaya", "Ketchum"];
$fullNames = [];

// Combinación de variables con `array_combine`
$fullNames = array_combine($names, $surnames);


/* PHP DE RESULTADO */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombres completos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
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
            margin: 5px 0;
        }
        pre {
            background-color: #efefef;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Listado de nombres con apellidos</h1>
    <ul>
        <?php
        // Recorrer el array y mostrar los nombres completos
        foreach ($fullNames as $name => $surname) {
            echo "<li>$name $surname</li>";
        }
        ?>
    </ul>

    <h2>Funcionamiento de array_combine con print_r</h2>
    <pre><?php print_r($fullNames); ?></pre>
</body>
</html>
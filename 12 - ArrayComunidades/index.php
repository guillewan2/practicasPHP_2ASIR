<?php
// Guillermo Torres
// Date: Thu 04 Dec 2025
// Time: 13:23
// Description: 'PHP que, dado un array que contiene las provincias de la comunidad de Andalucía y la población de cada una, se muestre por pantalla el nombre de la ciudad y la población'
//  Distribution: Arch Linux
$provinciaAndaluciaPoblacion = [
    "Almería" => ["Población" => 700000, "Zona" => "Andalucía Oriental"],
    "Cádiz" => ["Población" => 1250000, "Zona" => "Andalucía Occidental"],
    "Córdoba" => ["Población" => 800000, "Zona" => "Andalucía Occidental"],
    "Granada" => ["Población" => 920000, "Zona" => "Andalucía Oriental"],
    "Huelva" => ["Población" => 520000, "Zona" => "Andalucía Occidental"],
    "Jaén" => ["Población" => 630000, "Zona" => "Andalucía Oriental"],
    "Málaga" => ["Población" => 1600000, "Zona" => "Andalucía Occidental"],
    "Sevilla" => ["Población" => 1950000, "Zona" => "Andalucía Occidental"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        li {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>Provincias de Andalucía</h1>
    <ul>
        <?php
        foreach ($provinciaAndaluciaPoblacion as $provincia => $array) {
            echo "<li>" . $provincia . "</li>\n";
            echo "  <ul>\n";
            foreach ($array as $clave => $valor) {
                echo "    <li>" . $clave . ": " . $valor . "</li>\n";
            }
            echo "  </ul>\n";
            echo "</li>\n";
        }
        // Petardazo poner bien esto para que con el Ctrl + U se quede bien
        ?>
    </ul>
</body>
</html>
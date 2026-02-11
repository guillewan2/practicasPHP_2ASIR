<?php
// Guillermo Torres
// Date: Thu 20 Nov 2025
// Time: 13:45
// Description: 'PHP que lee el nombre, los apellidos, el salario,
//              'y la edad de una persona en un formulario y a partir
//              'de esos datos calcula un nuevo salario para esa persona.'
//  Distribution: Arch Linux

/*
    Las reglas que se van a aplicar son:
    - Si el salario es mayor de 2000 euros, no cambiará
    - Si el salario está entre 1000 y 2000:
        - Si la edad > 45 años, se sube un 3%
        - Si la edad <= 45 años, se sube un 10%
    - Si el salario es menor de 1000:
        - Los menores de 30 años cobrarán 1100 euros
        - De 30 a 45 años, sube un 3%
        - A los mayores de 45 años, sube un 15%
*/

// Variables
$nombre = filter_input(INPUT_POST, 'Nombre', FILTER_SANITIZE_SPECIAL_CHARS);
$apellidos = filter_input(INPUT_POST, 'Apellidos', FILTER_SANITIZE_SPECIAL_CHARS);
$salario = (float) filter_input(INPUT_POST, 'salario', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$edad = (int) filter_input(INPUT_POST, 'edad', FILTER_SANITIZE_NUMBER_INT);

// Inicializar nuevo salario
$nuevo_salario = $salario;

// Cálculo del nuevo salario

if ($salario > 2000):
    $nuevo_salario = $salario;
elseif ($salario > 1000 && $salario < 2000):
    if ($edad > 45):
        $nuevo_salario *= 1.03;
    else:
        $nuevo_salario *= 1.1;
    endif;
elseif ($salario < 1000):
    if ($edad < 30):
        $nuevo_salario = 1100;
    elseif ($edad >= 30 && $edad <= 45):
        $nuevo_salario *= 1.03;
    elseif ($edad > 45):
        $nuevo_salario *= 1.15;
    endif;
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario nuevo</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
    </style>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <h1>El nuevo salario es <?= $nuevo_salario ?></h1>
</body>

</html>
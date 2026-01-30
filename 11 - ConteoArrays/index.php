<?php
// Guillermo Torres
// Date: Wed 04 Dec 2025
// Time: 11:30
// Description: 'Programa en PHP que cuenta la frecuencia de palabras en un texto introducido en un formulario.'
// Distribution: Arch Linux

$resultado = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Si se detecta un envío por POST

    $texto = htmlspecialchars(filter_input(INPUT_POST, 'texto')); // Obtenemos el texto y lo sanitizamos


    if (!empty($texto)) { // Si el texto está vacío

        $texto_limpio = preg_replace('/[^\w\s]/', '', strtolower($texto)); // Convertir a minúsculas
        // y eliminar puntuación
/*
                -------------------PREG_REPLACE-------------------
                El preg_replace reemplaza con expresiones regulares.

                En el ejemplo que he puesto:
                - '/[^\w\s]/' 
                busca cualquier carácter que no sea una palabra (\w) o 
                un espacio en blanco (\s).
                ---------------------------------------------------
*/

        $palabras = explode(' ', $texto_limpio); // Array de palabras

        $resultado = array_count_values($palabras); // Contar frecuencia de cada palabra
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Palabras</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
            width: 300px;
            margin: auto;
            gap: 10px;
            border: 1px solid black;
            padding: 20px;
            background-color: white;
        }
        textarea {
            height: 100px;
            resize: vertical;
        }
        input[type="submit"] {
            width: 100px;
            align-self: center;
            cursor: pointer;
        }
        .resultado {
            margin-top: 20px;
            text-align: left;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        .resultado pre {
            background-color: #e9e9e9;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <h1>Contador de Frecuencia C/index.phpde Palabras</h1>
    <form action="/24 - ConteoArrays/index.php" method="post">
        <label for="texto">
            Introduce un texto:
            <textarea name="texto" id="texto" required></textarea>
        </label>
        <input type="submit" value="Contar">
    </form>

    <?php if (!empty($resultado)): // Si el resultado no está vacío ?>
        <div class="resultado">
            <h2>Resultado:</h2>
            <pre><?php
                foreach ($resultado as $palabra => $frecuencia) {
                    echo $palabra . ' => ' . $frecuencia . "\n";
                }
            ?></pre>
        </div>
    <?php endif; ?>
</body>
</html>
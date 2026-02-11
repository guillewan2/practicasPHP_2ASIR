<?php
// Guillermo Torres
// Date: Fri 21 Nov 2025
// Time: 12:59
// Description: 'Desarrollar un programa en PHP que adivine el 
//               número que tienes almacenado en tu aplicación
//               Para ello se solicitará un número por ejemplo desde 
//               el 1 hasta el 50 y jugaremos hasta adivinarlo.'
//  Distribution: Arch Linux

$numero_Aleatorio = 33; // Número a adivinar
$resultado = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Si se encuentra una petición por POST

    $numero_Usuario = (int)filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_INT);
    

    if ($numero_Usuario > $numero_Aleatorio) {
        $resultado = "El número es menor, inténtalo de nuevo";
    } elseif ($numero_Usuario < $numero_Aleatorio) {
        $resultado = "El número es mayor, inténtalo de nuevo";
    } else {
        $resultado = "Has acertado";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php if (!empty($resultado)): ?>
        <h1><?php echo $resultado; ?></h1>
    <?php endif; ?>
    <?php
    // Mostrar el formulario si no se ha acertado
    if ($resultado !== "Has acertado") {
        include "php/form.html";
    }
    ?>
</body>

</html>

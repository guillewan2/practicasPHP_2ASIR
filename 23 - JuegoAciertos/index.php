<?php
/*
                   EJERCICIO 23 - JUEGO DE ACIERTOS
Añadiendo la siguiente funcionalidad al ejemploa anterior. Vamos a realizar 
un juego en el que el usuario tendrá que introducir palabras y cuando las 
acierte tendrá que mostrar un mensaje de acertado. 

Ejemplo: Tengo una página web donde el usuario introduce una palabra. 
Esta palabra se envía a un PHP donde tengo una estructura 
`["hola","como","pepe","juan"]`. Tiene que comprobar si la palabra que ha 
introducido está en nuestra estructura. En caso de estar, habrá acertado. 
En cualquier otro caso, no habrá acertado.
*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $palabra_usuario = trim($_POST['palabra'] ?? '');

    // Estructura de palabras a acertar
    $palabras_acertar = ["hola", "como", "pepe", "juan"];

    // Comprobar si la palabra introducida está en la estructura (sin importar mayúsculas/minúsculas)
    $acertado = false;
    foreach ($palabras_acertar as $palabra) {
        if (strcasecmp($palabra_usuario, $palabra) === 0) { // Comparación sin distinguir mayúsculas/minúsculas
            $acertado = true;
            break;
        }
    }
} else {
    // Redirigir a form.html
    header('Location: form.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palabras</title>
</head>
<body>
    <?php if ($acertado): ?>
        <p>¡Has acertado!</p>
    <?php else: ?>
        <p>No has acertado. Inténtalo de nuevo.</p>
    <?php endif; ?>
</body>
</html>
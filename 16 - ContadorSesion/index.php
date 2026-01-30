<?php
// Guillermo Torres
// Date: Fri 30 Jan 2026
// Time: 16:58
// Description: 'Contador de veces abierta la página a través de cookies'
//  Distribution: Arch Linux

/*      ----- DISCLAIMER -----
    Los diseños están hechos con IA
    porque es menos trabajoso y me
    permite aprender la lógica de lo
    que estoy haciendo, perdon :(
        ----------------------      */

# Para hacer esto, vamos a usar sesiones. Lo primero es crear una sesión
session_start();

# Una vez creada la sesión, vamos a guardar el ID de sesión para verlo posteriormente
$idSesion = session_id();

# Comprobamos si ha llegado el reset
if (isset($_GET['reset'])) {
    session_destroy(); # Destruimos la sesión
    header("Location: ."); # Redirigimos a la pagina actual para que no se ejecute todo otra vez
    exit; # Salimos de ESTE php
}

?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de apertura</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php if (! isset($_SESSION['contador'])): # Si no existe contador en las cookies 
    ?>
        <div class="error">
            <!-- USAREMOS ICONOS DE FONTAWESOME PARA QUE QUEDE MAS COOL -->
            <i class="fa-solid fa-triangle-exclamation"></i>
            <h2>Acabas de abrir la página por primera vez</h2>
            <p>Bienvenido :D</p>
            <p id="id">Tu id de sesión es: <?=  $idSesion?></p>
        </div>
    <?php
        $_SESSION['contador'] = 0; // Inicializamos
    else:
    ?>
        <div class="contador">
            <i class="fa-regular fa-face-smile"></i>
            <h1>El contador asciende a <?= round($_SESSION['contador']) ?>
            </h1>
            <p>
                PHP procesa todas las peticiones GET con la misma lógica, por lo que
                Se realizan dos operaciones de escritura, una para el <code>favicon.ico</code>
                y otra para <code>/</code>. Esto lo que hace es que se ejecute dos veces la lógica
                de <code>$_SESSION['contador']+=1;</code>.
            </p>
            <p>
                Mi arreglo personal ha sido que el contador en vez de aumentarse en 1 se aumente en 0.5,
                lo que permite que las dos peticiones se muestren como una. Para evitar que pueda cargarse
                solo una cosa, le he añadido una funcion <code>round</code> a el contador para que siempre
                muestre un número entero.
            </p>
            <p>
                Para mantener al navegador contento, podemos añadir este elemento <code>&lt;link&gt;</code>
                para que no haga dos requests:
            </p>
            <pre>&lt;link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAADElEQVQI12P4//8/AAX+Av7czFnnAAAAAElFTkSuQmCC"&gt;</pre>
            <p style="text-align: center; margin-top: 10px;"> <!-- Lo que hace la pereza para no modificar el css -->
                Para los emojis, se puede usar FontAwesome (Lo que he usado)
            </p>
            <div class="botonreset"><a href="?reset">Resetear Contador</a></div>

            <p id="id">Tu id de sesión es: <?=  $idSesion?></p>

        </div>
    <?php
        $_SESSION['contador'] += 0.5;

    endif;
    ?>
</body>

</html>
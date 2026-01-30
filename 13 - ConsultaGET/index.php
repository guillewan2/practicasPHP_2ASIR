<?php
// Guillermo Torres
// Date: Thu 08 Jan 2026
// Time: 13:54
// Description: 'Crea una página capaz de recoger un nombre mediante un parámetro GET de
// cadena de consulta. Así si la página se llama consulta.php, la podremos invocar
// con el texto: consulta.php?nombre=Jorge'
//  Distribution: Arch Linux

if (!isset($_GET['nombre'])) {
    echo "No hay na";
} else {
    $nombre = filter_input(INPUT_GET, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS);
    echo "Hola, $nombre";
}
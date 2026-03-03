<?php
$fichero = "fichero.txt";
if (file_exists($fichero)) {
    $contenido = file_get_contents($fichero);
    echo "<h1>Contenido del archivo txt:</h1>";
    echo "<pre>" . htmlspecialchars($contenido) . "</pre>";
}
else {
    echo "El fichero no existe.";
}
?>
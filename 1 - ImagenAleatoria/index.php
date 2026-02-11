<?php
// Guillermo Torres
// Date: Thu 20 Nov 2025
// Time: 13:45
// Description: 'PHP que muestra de forma aleatoria dos
//               imágenes de internet (o de un directorio)'
//  Distribution: Arch Linux


$imagenes = [
    "https://content.r9cdn.net/rimg/dimg/30/2c/c2817db5-city-21033-159036d7254.jpg",
    "https://a.cdn-hotels.com/gdcs/production1/d1520/d15bcc97-8a7b-4f23-b37d-abe7bb267e45.jpg"
];

$imagenes_directorio = [
    "img/imagen1.webp",
    "img/imagen2.webp"
];
$random_n = rand(0,1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body {
            background: url(<?= $imagenes[$random_n]; ?>);
        }
        <?php /* ...Con las imágenes del directorio local... */ ?>
        /*body {
            background: url(<?= $imagenes_directorio[$random_n]; ?>);
        }*/
        
    </style>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
</body>
</html>
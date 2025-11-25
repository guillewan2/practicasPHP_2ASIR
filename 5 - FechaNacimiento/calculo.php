<?php
$edad = filter_input(INPUT_POST, 'edad', FILTER_VALIDATE_INT);

$currentYear = (int)date("Y");
$birthYear = $currentYear - $edad;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha de Nacimiento</title>
</head>
<body>
    <h1>Has nacido en el año <?= $birthYear ?></h1>
</body>
</html>
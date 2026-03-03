<?php
session_start();

if (isset($_SESSION['nombre'])) {
    header('Location: practica2-saludo.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['color_fondo'] = $_POST['color_fondo'];
    $_SESSION['color_letra'] = $_POST['color_letra'];
    $_SESSION['tipo_letra'] = $_POST['tipo_letra'];
    header('Location: practica2-saludo.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Preferencias Sesiones</title>
</head>

<body>
    <form action="" method="POST">
        <label>Nombre y apellidos:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Color de fondo:</label>
        <input type="color" name="color_fondo" value="#ffffff"><br><br>

        <label>Color de letra:</label>
        <input type="color" name="color_letra" value="#000000"><br><br>

        <label>Tipo de letra:</label>
        <select name="tipo_letra">
            <option value="'Roboto', sans-serif">Roboto</option>
            <option value="'Open Sans', sans-serif">Open Sans</option>
            <option value="'Oswald', sans-serif">Oswald</option>
        </select><br><br>

        <input type="submit" value="Guardar preferencias">
    </form>
</body>

</html>
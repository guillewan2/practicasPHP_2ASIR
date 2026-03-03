<?php
if (isset($_COOKIE['nombre']) && isset($_COOKIE['color_fondo']) && isset($_COOKIE['color_letra']) && isset($_COOKIE['tipo_letra'])) {
    header('Location: practica1-saludo.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expire = time() + 3600 * 24 * 365;
    setcookie('nombre', $_POST['nombre'], $expire);
    setcookie('color_fondo', $_POST['color_fondo'], $expire);
    setcookie('color_letra', $_POST['color_letra'], $expire);
    setcookie('tipo_letra', $_POST['tipo_letra'], $expire);
    header('Location: practica1-saludo.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Preferencias</title>
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

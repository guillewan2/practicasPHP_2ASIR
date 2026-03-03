<?php
require_once "datos.php";
// Comprobar si hay una petición POST 
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $nombre = htmlspecialchars($_POST['nombre']);
    $valoracion = $_POST['valoracion'];
    
    $mysql->query("insert into videojuegos (nombre,valoracion) values ('$nombre',$valoracion);");?>
    <a href="index.php">Volver atrás</a><?php
    } else {

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
</head>
<body>
    <form action="" method="post">
        <label for="nombre">
            Nombre: <input type="text" name="nombre" id="nombre"> <br><br>
        </label>
        <label for="valoracion">
            Valoracion: <input type="number" name="valoracion" id="valoracion" min="0" max="10"><br><br>
        </label>
        <input type="submit" value="Enviar"><br><br>
    </form>
</body>
</html>

<?php }?>
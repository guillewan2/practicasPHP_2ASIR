<?php
require_once "datos.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $id=$_POST['id'];
    $mysql->query("delete from videojuegos where id = $id;");
    echo "<p><a href=\"index.php\">Volver</a></p>";
} else {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>borrar fila</title>
    </head>

    <body>
        <h1>Tabla</h1>
        <?php
        $resultado = $mysql->query("select * from videojuegos;");
        while ($fila = $resultado->fetch_assoc()) { ?>
            <h2> <?= $fila['id'] ?>-<?= $fila['nombre'] ?>-<?= $fila['valoracion'] ?></h2><?php }  ?>
        <h1>Formulario</h1>
        <form action="" method="post">
             <select name="id" id="id">
                <?php
                $variable=$mysql->query("select * from videojuegos;");
                while ($fila = $variable->fetch_assoc()){?>
                    <option value="<?php $fila['id'] ?>"><?= $fila['nombre'] ?></option>
                <?php                
                }?>

             </select>

            <br><br>
            <input type="submit" value="Enviar">

           
        </form>
    </body>

    </html>

<?php
}
?>
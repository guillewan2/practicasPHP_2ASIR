<?php

/*
- EJERCICIO CRUD -
*/

require_once "datos.php";

if ($mysql->connect_error) {
    echo "Hay error en la base de datos (ERROR {$mysql->connect_errno})";
}


$datos = $mysql->query("SELECT * FROM videojuegos;",MYSQLI_STORE_RESULT);
while ($fila = $datos->fetch_assoc()){ ?>
    <h1><?= $fila['id'] ?>. <?= $fila['nombre'] ?></h1>
    <h2><?= $fila['valoracion'] ?> estrellas</h2>
<?php
}
?>

<p><a href="insertar.php">Insertar dato en la base de datos</a></p>
<p><a href="borrar.php">borrar dato en la base de datos</a></p>

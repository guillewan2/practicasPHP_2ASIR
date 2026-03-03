<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Datos</title>
</head>
<body>
    <form method="post" action="?do=insert">
        <label for="nombre">
            Nombre <input type="text" name="nombre" id="nombre" require><br><br>
        </label>
        <label for="apellido">
            Apellido <input type="text" name="apellido" id="apellido" require><br><br>
        </label>
        <label for="email">
            Email <input type="email" name="email" id="email" require><br><br>
        </label>
        <label for="fechanacimiento">
            Fecha de Nacimiento <input type="date" name="fechanacimiento" id="fechanacimiento" require><br><br>
        </label>
        <input type="submit" value="enviar">
    </form>
</body>
</html>
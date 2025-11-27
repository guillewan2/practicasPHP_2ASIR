<?php
$directorio = scandir(__DIR__);
usort($directorio, 'strnatcmp'); // Ordenar de forma natural
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos de PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
        }
        a {
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <h1>Ejercicios de PHP</h1>
    <ul>
        <?php
        $excluidos = ['index.php', 'README.md', '.', '..', '.git', 'createzip.sh', '.gitignore']; //Archivos a excluir
        foreach ($directorio as $archivo) { 
            if (!in_array($archivo, $excluidos)) { // Si no está en la lista de excluidos
                echo "<li><a href='$archivo'>$archivo</a> - <a href='https://github.com/guillewan2/practicasPHP_2ASIR/tree/main/$archivo'>Github</a></li>";
            }
        }
        ?>
    </ul>
</body>
</html>
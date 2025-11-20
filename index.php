<?php
exec('ls', $directorio);
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
        foreach ($directorio as $archivo) {
            if ($archivo != 'index.php' && $archivo != 'README.md') {
                echo "<li><a href='$archivo'>$archivo</a></li>";
            }
        }
        ?>
</body>
</html>
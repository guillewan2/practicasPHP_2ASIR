<?php
$directorio = scandir(__DIR__);
usort($directorio, 'strnatcmp'); // Ordenar de forma natural
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicas PHP</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <h1>Ejercicios de PHP</h1>
    <ul class="project-grid">
        <?php
        $excluidos = ['index.php', 'README.md', '.', '..', '.git', 'createzip.sh', '.gitignore', 'docker-compose.yml', '.github', 'Dockerfile', 'style.css', 'LICENSE'];
        foreach ($directorio as $archivo) { 
            if (!in_array($archivo, $excluidos)) {
                echo "<li>
                        <a class='project-link' href='$archivo'>$archivo</a> 
                        <a class='github-link' href='https://github.com/guillewan2/practicasPHP_2ASIR/tree/main/$archivo' target='_blank'>Ver en GitHub &rarr;</a>
                      </li>";
            }
        }
        ?>
    </ul>
    <footer>
        <p>Guillermo Torres</p>
        <div class="mention">2º CFGS ASIR</div>
        <p class="ai-notice">Este repositorio lo he hecho a mano menos los diseños de las páginas, que los he hecho con ayuda de la IA, específicamente Gemini 3 Pro</p>
    </footer>
</body>
</html>
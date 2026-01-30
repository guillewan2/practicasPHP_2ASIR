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
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #0f172a;
            --card-bg: #1e293b;
            --text-color: #f1f5f9;
            --text-muted: #94a3b8;
            --accent-color: #38bdf8;
            --hover-color: #0ea5e9;
            --border-color: #334155;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            margin: 0;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 40px;
            color: var(--accent-color);
            text-align: center;
            letter-spacing: -0.05em;
        }

        ul {
            list-style-type: none;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 24px;
            width: 100%;
            max-width: 1000px;
        }

        li {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 20px;
            transition: all 0.2s ease;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        li:hover {
            transform: translateY(-2px);
            border-color: var(--accent-color);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        a.project-link {
            text-decoration: none;
            color: var(--text-color);
            font-size: 1.1rem;
            font-weight: 600;
            display: flex;
            align-items: center;
        }

        a.project-link::before {
            content: '📂';
            margin-right: 10px;
            font-size: 1.2rem;
            filter: grayscale(100%);
            transition: filter 0.2s;
        }
        
        li:hover a.project-link::before {
             filter: none;
        }

        a.github-link {
            text-decoration: none;
            color: var(--text-muted);
            font-size: 0.85rem;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: color 0.2s;
            align-self: flex-start;
        }

        a.github-link:hover {
            color: var(--accent-color);
        }

        footer {
            margin-top: 60px;
            text-align: center;
            color: var(--text-muted);
            border-top: 1px solid var(--border-color);
            padding-top: 20px;
            width: 100%;
            max-width: 800px;
        }

        footer p {
            margin: 5px 0;
        }

        .mention {
            font-weight: 600;
            color: var(--text-color);
            margin-bottom: 15px;
        }

        .ai-notice {
            font-size: 0.8rem;
            opacity: 0.7;
            font-style: italic;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
            }
            ul {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <h1>Ejercicios de PHP</h1>
    <ul>
        <?php
        $excluidos = ['index.php', 'README.md', '.', '..', '.git', 'createzip.sh', '.gitignore', 'docker-compose.yml', '.github', 'Dockerfile'];
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
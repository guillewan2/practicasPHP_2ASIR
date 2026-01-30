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
            --card-bg: rgba(30, 41, 59, 0.7);
            --text-color: #e2e8f0;
            --accent-color: #38bdf8;
            --hover-bg: rgba(56, 189, 248, 0.1);
            --border-color: rgba(148, 163, 184, 0.1);
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
            background-image: 
                radial-gradient(at 0% 0%, hsla(253,16%,7%,1) 0, transparent 50%), 
                radial-gradient(at 50% 0%, hsla(225,39%,30%,1) 0, transparent 50%), 
                radial-gradient(at 100% 0%, hsla(339,49%,30%,1) 0, transparent 50%);
        }

        h1 {
            font-weight: 600;
            font-size: 3rem;
            margin-bottom: 40px;
            background: linear-gradient(to right, #38bdf8, #818cf8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            width: 100%;
            max-width: 1200px;
        }

        li {
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 20px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        li:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.5);
            border-color: var(--accent-color);
            background: rgba(30, 41, 59, 0.9);
        }

        li::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.05), transparent);
            transform: translateX(-100%);
            transition: 0.5s;
        }

        li:hover::before {
            transform: translateX(100%);
        }

        a.project-link {
            text-decoration: none;
            color: var(--text-color);
            font-size: 1.1rem;
            font-weight: 400;
            flex-grow: 1;
            display: flex;
            align-items: center;
        }

        a.project-link::before {
            content: '📁';
            margin-right: 10px;
            font-size: 1.2rem;
        }

        a.github-link {
            text-decoration: none;
            color: var(--accent-color);
            font-size: 0.9rem;
            border: 1px solid var(--accent-color);
            padding: 5px 12px;
            border-radius: 20px;
            transition: all 0.3s ease;
            white-space: nowrap;
            margin-left: 15px;
        }

        a.github-link:hover {
            background: var(--accent-color);
            color: #fff;
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
                        <a class='github-link' href='https://github.com/guillewan2/practicasPHP_2ASIR/tree/main/$archivo' target='_blank'>Ver en GitHub</a>
                      </li>";
            }
        }
        ?>
    </ul>
</body>
</html>
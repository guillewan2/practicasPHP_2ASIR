<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola <?php echo htmlspecialchars($username); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 50px;
        }
        h1 {
            color: #333;
        }
    </style>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Hola <?php echo htmlspecialchars($username); ?></h1>
</body>
</html>
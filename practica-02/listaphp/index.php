<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú de Páginas Web</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            display: inline;
            margin-right: 20px;
        }
        li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Menú de Páginas Web</h2>
    <ul>
    <?php
    // Incluir el menú.php para generar el menú
    include 'menu.php';
    ?>
    </ul>
</body>
</html>
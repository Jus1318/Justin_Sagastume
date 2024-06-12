<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Contador de Letras</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        .container {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Resultado de Contador de Letras</h2>
        <div class="result">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $frase = $_POST['frase'];
                $letra = $_POST['letra'];

                // Validar que solo se haya ingresado una letra
                if (strlen($letra) == 1) {
                    $conteo = substr_count($frase, $letra);
                    echo "<p>La letra '$letra' aparece $conteo veces en la frase.</p>";
                } else {
                    echo "<p>Por favor, ingrese solo una letra.</p>";
                }
            } else {
                echo "<p>No se han recibido datos válidos.</p>";
            }
        ?>
        </div>
        <a href="index.html">Volver</a>
    </div>
</body>
</html>


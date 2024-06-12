<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de la Adivinanza</title>
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
        <h2>Resultado de la Adivinanza</h2>
        <div class="result">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numeroIngresado = $_POST['numero'];
                $numeroAleatorio = rand(1, 10);

                if ($numeroIngresado == $numeroAleatorio) {
                    echo "<p>¡Felicidades! Has adivinado el número: $numeroAleatorio</p>";
                } else {
                    echo "<p>No has adivinado. El número era: $numeroAleatorio. Inténtalo de nuevo.</p>";
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
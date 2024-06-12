<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Cálculos</title>
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
        <h2>Resultado de Cálculos</h2>
        <div class="result">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];

                $suma = $num1 + $num2;
                $resta = $num1 - $num2;
                $multiplicacion = $num1 * $num2;

                echo "<p>Suma: $suma</p>";
                echo "<p>Resta: $resta</p>";
                echo "<p>Multiplicación: $multiplicacion</p>";

                if ($num2 != 0) {
                    $division = $num1 / $num2;
                    echo "<p>División: $division</p>";
                } else {
                    echo "<p>División: No se puede dividir por cero</p>";
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
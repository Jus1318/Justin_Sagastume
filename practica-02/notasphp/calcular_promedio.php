<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del Promedio</title>
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
        <h2>Resultado del Promedio</h2>
        <div class="result">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nota1 = $_POST['nota1'];
                $nota2 = $_POST['nota2'];
                $nota3 = $_POST['nota3'];

                // Validar que las notas son números
                if (is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3)) {
                    $promedio = ($nota1 + $nota2 + $nota3) / 3;
                    echo "<p>El promedio de las notas es: " . number_format($promedio, 2) . "</p>";
                } else {
                    echo "<p>Por favor, ingrese valores numéricos válidos para las notas.</p>";
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
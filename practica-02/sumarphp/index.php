<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Básica</title>
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
        input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Calculadora Básica</h2>
        <form action="calcular.php" method="post">
            <label for="num1">Número 1:</label>
            <input type="number" id="num1" name="num1" required>

            <label for="num2">Número 2:</label>
            <input type="number" id="num2" name="num2" required>

            <input type="submit" value="Calcular">
        </form>
    </div>
</body>
</html>
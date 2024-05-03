<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        input[type="number"] {
            width: 80px;
        }
    </style>
</head>
<body>
    <h2>Calculadora</h2>
    <form action="obj.php" method="post">
        <input type="number" name="num1" required>
        <select name="operacao" required>
            <option value="soma">+</option>
            <option value="subtracao">-</option>
            <option value="multiplicacao">*</option>
            <option value="divisao">/</option>
        </select>
        <input type="number" name="num2" required>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas v2.0</h1>
        <form action="result.php" method="get">
            <label for="valor">Quantos R$ você tem na carteira?</label>
            <input type="number" name="valor" id="idvalor" step="0.01">
            <input type="submit" value="Converter">
        </form>
    </main>
</body>
</html>
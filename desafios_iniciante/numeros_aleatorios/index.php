<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números aleatórios</title>
    <link rel="stylesheet" href="/cursophp/css/style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php
            $val = mt_rand(0, 100);
            echo "Gerando um número aleatório entra 0 e 100...<br>";
            echo "O valor gerado foi <strong>$val</strong>";
        ?>
        <input type="button" onclick="javascript:window.location.reload()" value="&#x1F501; Gerar outro">
    </main>
</body>
</html>
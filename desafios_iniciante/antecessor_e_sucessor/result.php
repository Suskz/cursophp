<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="/cursophp/css/style.css">
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <p>
            <?php 
                $number = $_GET["number"] ?? 0;
                $antecessor = $number - 1;
                $sucessor = $number + 1;
                echo "O número escolhido foi <strong>$number</strong>";
                echo "<br>O seu <em>antecessor</em> é $antecessor";
                echo "<br>O seu sucessor é $sucessor";
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.php'">Voltar</button>
</main>
</body>
</html>
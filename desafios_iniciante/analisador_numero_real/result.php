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
        <h1>Analisador de Número Real</h1>
        <?php 
            $number = $_GET["number"];

            $int = (int)$number;
            $fra = $number - $int;

            echo "Analisando o número <strong>" . number_format($number, 3, ",", ".") . "</strong> informado pelo usúario:";

            echo "<ul><li> A parte inteira do número é: <strong>" . number_format($int, 0, ",", ".") . "</strong></li><li> A parte fracionária do número é: <strong>" . number_format($fra, 3, ",", ".") . "</strong></li></ul>";
        ?>
    </main>
</body>
</html>
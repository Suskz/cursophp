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
        <h1>Conversor de moedas v1.0</h1>
        <?php 
            $real = $_GET["valor"] ?? 0;
            $cotfix = 4.97;
            $dolar = $real/$cotfix;
            //echo "Seus R$". number_format($real, 2, ",",".") . " equivalem a <strong>US$" . number_format($dolar, 2, ",",".") . "</strong><br>";
            //

            //formatação de moedas com internacionalização
            //é necessario a biblioteca intl
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus ". numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";

            echo "<strong>*Cotação fixa de 4.97</strong> informada diretamente no código";
        ?>
        <input type="button" onclick="javascript:window.location.href='index.php'" value="Voltar">
    </main>
</body>
</html>
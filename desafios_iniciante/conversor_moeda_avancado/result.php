<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas v2.0</h1>
        <?php
            //cotação vinda da API  do Banco Central do Brasil
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            //quantos reais você tem
            $real = $_GET["valor"] ?? 0;

            //equivalência em dólar
            $dolar = $real / $cotacao;

            //formatação de moedas com internacionalização
            //é necessario a biblioteca intl
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus ". numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
        ?>
        <p>*Cotação obtida diretamente do site do<a href="https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/recursos/CotacaoDolarPeriodo">Banco Central do Brasil</a></p>
        <input type="button" onclick="javascript:window.location.href='index.php'" value="Voltar">
    </main>
</body>
</html>
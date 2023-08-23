<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de preços</title>
    <link rel="stylesheet" href="/cursophp/css/style.css">
</head>
<body>
    <main>
        <h1>Reajustador de preços</h1>
        
        <?php 
            $val = $_GET["val"] ?? 0;
            $porc = $_GET["porc"] ?? 0;
            $reaj = $porc / 100;
            $newval = $val + ($val * $reaj);
        ?>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="val">Preço do produto (R$)</label>
            <input type="number" name="val" id="idval" min="0.10" step="0.01" value="<?= $val?>">
            <label for="porc">Qual será o percentual de reajuste?(<strong><span id="idp">?</span>%</strong>)</label>
            <input type="range" name="porc" id="idporc" min="0" max="100" step="1" oninput="mudaValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do ajuste</h2>
        <?php 
            echo "O produto que custava " . number_format($val, 2, ",") . ", com <strong>$porc% de aumento</strong> vai passar a custar <strong>R$" . number_format($newval, 2, ",") . "</strong> a partir de agora"
        ?>
    </section>

    <script>
        function mudaValor(){
            idp.innerText = idporc.value;
        }
    </script>
</body>
</html>
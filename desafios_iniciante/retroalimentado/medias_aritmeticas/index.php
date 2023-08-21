<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="/cursophp/css/style.css">
</head>
<body>
    <main>
        <h1>Médias Aritiméticas</h1>
        <?php 
            $val1 = $_GET["val1"] ?? 0;
            $pes1 = $_GET["pes1"] ?? 1;
            $val2 = $_GET["val2"] ?? 0;
            $pes2 = $_GET["pes2"] ?? 1;
        ?>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="val1">1° Valor</label>
            <input type="number" name="val1" id="idval1" step="0.1" value="<?= $val1?>">
            <label for="pes1">1° Peso</label>
            <input type="number" name="pes1" id="idpes1" value="<?= $pes1?>">
            <label for="val2">2° Valor</label>
            <input type="number" name="val2" id="idval2" step="0.1" value="<?= $val2?>">
            <label for="pes2">2° Peso</label>
            <input type="number" name="pes2" id="idpes2" value="<?= $pes2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Calculo das Médias</h2>
        <?php 
            $simp = ($val1 + $val2) / 2;
            $pond = (($val1 * $pes1) + ($val2 * $pes2)) / ($pes1 + $pes2);

            echo "Analisando os valores $val1 e $val2:" . PHP_EOL;
            echo "<ul><li>A <strong>Média Aritmética Simpes</strong> entre os valores é igual a " . number_format($simp, 2, ","). ".</li><li>A <strong>Média Aritmética Ponderada</strong> com pesos $pes1 e $pes2 é igual a " . number_format($pond, 2, ",") . ".</li></ul>"
        ?>
    </section>
</body>
</html>
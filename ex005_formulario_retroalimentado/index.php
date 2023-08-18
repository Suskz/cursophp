<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Retroalimentado</title>
    <link rel="stylesheet" href="/cursophp/css/style.css">
</head>
<body>
    <main>
        <h1>Somador de valores</h1>

        <?php 
            //capturando os dados do formulário retroalimentado
            $val = $_GET["val"] ?? 0;
            $val2 = $_GET["val2"] ?? 0;
            $soma= $val + $val2;
        ?>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="val">Valor 1</label>
            <input type="number" name="val" id="idval" value="<?= $val?>">
            <label for="val2">Valor 2</label>
            <input type="number" name="val2" id="idval2" value="<?= $val2?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section>
        <h2>Resultado da soma</h2>

        <?php 
            echo "<p>A soma entre os valores $val e $val2 é <strong>$soma</strong></p>";
        ?>
    </section>
</body>
</html>
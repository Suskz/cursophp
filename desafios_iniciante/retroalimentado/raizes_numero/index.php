<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizes de um número</title>
    <link rel="stylesheet" href="/cursophp/css/style.css">
</head>
<body>
    <main>
        <h1>Informe um número</h1>
        <?php 
            $num = $_GET["num"] ?? 0;
            $raizq = sqrt($num);
            $raizc = $num ** (1/3);
        ?>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="idnum">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "Analisando o <strong>número $num</strong>, temos:"
        ?>

        <ul>
            <li>A sua raiz quadrada é <strong><?= number_format($raizq, 3, ",")?></strong></li>
        </ul>
        <ul>
            <li>A sua raiz cúbica é <strong><?= number_format($raizc, 3, ",")?></strong></li>
        </ul>
    </section>
</body>
</html>
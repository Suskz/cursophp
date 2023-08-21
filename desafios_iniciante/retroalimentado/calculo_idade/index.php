<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando sua idade</title>
    <link rel="stylesheet" href="/cursophp/css/style.css">
</head>
<body>
    <main>
        <h1>Calculando sua idade</h1>
        <?php 
            $actyear = date("Y");
            $age = $_GET["age"] ?? 0;
            $year = $_GET["year"] ?? 0;
        ?>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="age">Em que ano você nasceu?</label>
            <input type="number" name="age" id="idage">
            <label for="year">Quer saber sua idade em que ano?(Atualmente estamos em <strong><?= $actyear?></strong>)</label>
            <input type="number" name="year" id="idyear" min="<?= $age + 1?>" value="<?= $year?>" >
            <input type="submit" value="Calcular idade">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            $test = $year - $age;
            echo "Quem nasceu em $age vai ter <strong>$test anos</strong> em $year!"
        ?>
    </section>
</body>
</html>
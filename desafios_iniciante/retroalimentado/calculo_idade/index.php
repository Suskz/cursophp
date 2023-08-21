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
        ?>
        <form action="" method="get">
            <label for="age">Em que ano você nasceu?</label>
            <input type="number" name="age" id="idage">
            <label for="year">Quer saber sua idade em que ano?(Atualmente estamos em <strong><?= $actyear?></strong>)</label>
        </form>
    </main>
</body>
</html>
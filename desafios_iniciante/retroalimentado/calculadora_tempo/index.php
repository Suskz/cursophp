<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="/cursophp/css/style.css">
</head>
<body>
    <main>
        <?php 
            $seg = $_GET["seg"] ?? 0;
        ?>
        <h1>Calculadora de tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="idseg" value="<?= $seg?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <?php
            $sem = intdiv($seg, 604800);
            $resto = $seg % 604800;
            $dia = intdiv($resto, 86400);
            $resto = $resto % 86400;
            $hor = intdiv($resto, 3600);
            $resto = $resto % 3600;
            $min = intdiv($resto, 60);
            $resto = $resto % 60;

            echo "Analisando o valor que você digitou, <strong>". number_format($seg, 0,".", ".") ." segundos</strong> equivalem a um total de:";
        ?>
        <ul>
            <li><?= $sem?> Semanas</li>
        </ul>
        <ul>
            <li><?= $dia?> Dias</li>
        </ul>
        <ul>
            <li><?= $hor?> Horas</li>
        </ul>
        <ul>
            <li><?= $min?> Minutos</li>
        </ul>
        <ul>
            <li><?= $resto?> Segundos</li>
        </ul>
    </section>
</body>
</html>
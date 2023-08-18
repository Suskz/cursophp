<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia divisão</title>
    <link rel="stylesheet" href="/cursophp/css/style.css">
</head>
<body>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <?php 
            $dividendo = $_GET["dividendo"] ?? 0 ;
            $divisor = $_GET["divisor"] ?? 1;
            $quociente = intdiv($dividendo, $divisor);
            $resto = ($dividendo % $divisor);
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="iddividendo" min="0" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="iddivisor" min="1" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>
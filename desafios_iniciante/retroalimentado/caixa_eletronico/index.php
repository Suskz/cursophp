<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa eletrônico</title>
    <link rel="stylesheet" href="/cursophp/css/style.css">
</head>
<body>
    <main>
        <h1>Caixa Eletrônico</h1>
        <?php 
            $valor = $_GET["valor"] ?? 0;
        ?>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="valor" id="idvalor" value="<?= $valor ?>">
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <?php 
            $cem = intdiv($valor, 100);
            $resto = $valor % 100;
            $cinquenta = intdiv($resto, 50);
            $resto = $resto % 50;
            $dez = intdiv($resto, 10);
            $resto = $resto % 10;
            $cinco = intdiv($resto, 5);
            $resto = $resto % 5;
            echo "Saque de R$() realizado <br> O caixa eletrônico vai te entregar as seguintes notas: ";
            echo "<ul><li>$cem notas de 100</li></ul><ul><li>$cinquenta notas de 50</li></ul><ul><li>$dez notas de 10</li></ul><ul><li>$cinco notas de 5</li></ul>"
        ?>
    </section>
</body>
</html>
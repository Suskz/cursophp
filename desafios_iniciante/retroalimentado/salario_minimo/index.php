<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="/cursophp/css/style.css">
</head>
<body>
    <main>
        <h1>Informe seu salário</h1>
        <?php 
            $sal = $_POST["sal"] ?? 0;
            $salmin = 1320;
            $qtdsal = intdiv($sal, $salmin);
            $resto = $sal % $salmin;
        ?>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="idsal" step="0.01" value="<?=$sal?>">
            <p>Considerando um salário mínimo de <strong>R$1.320,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h1>Resultado Final</h1>
        <?php 
            echo "Quem recebe um salario de ". number_format($sal, 2, ",", ".") . " ganha <strong> $qtdsal salários mínimos</strong> + R$ " . number_format($resto, 2, ",", ".") . ".";
        ?>
    </section>
</body>
</html>
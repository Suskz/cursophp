<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
        // 0x = hexadecimal | 0b = binario | 0 = octal
        $num = 0x1A;
        echo "O valor da variavel é $num ";

        $v = true;
        var_dump($v);

        $num = (int)3e2; // 3x10² coerção
        var_dump($num);

        $num2 = (int) "900";
        var_dump($num2);

        $casado = false;
        //var_dump($casado);
        // Em echo ou print o valor para boolean é true = 1 e false = empty
        echo "O valor para casado é: $casado";

        $vet = [7, 7.5, "Sasa", true, ];
        var_dump($vet);

        class Carro{
            private string $Carro;
        }
        
        $c = new Carro;

        var_dump($c);
        
        $nome = "chesque";
        $snome = "dele";
        //Sequência de escape \"\" 
        //Nona linha = \n
        echo "$nome \"bresque\" $snome";

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos</title>
</head>
<body>
    <p> se uma expressão ou variável for utilizada numa operação que o tipo não suporte, o PHP tentará transformar o valor em um tipo que suporte a operação. Esse processo depende do contexto de onde o valor é utilizado</p>
    <?php
        $n1 = '4'; // do tipo string
        var_dump($n1); 
        if (is_int($n1)) { //Não vai executar porque não é int
            $n1 += 4;
        }
        $n1 += 4; // Vai executar de qualquer maneira, mesmo o tipo sendo string
        var_dump($n1);
        /** Se transformou no tipo int.
         * Isto é um comportamento do PHP.
         * Se o tipo não suporta uma operação
         * o PHP irá transformar em um tipo que suporte a operação.
        */
        if (is_int($n1)) {
            $n1 += 4;
            var_dump($n1);
        }
        echo "<br>";

        $x = true;
        $y = false;
        $z = $y OR $x;
        /** OR tem precedência menor do que o operador de atribuição
         * e sem os parênteses é equivalente a <?php ($z=$y) OR $x ?>
         * e vai retornar false.
         * Por isso deve sempre usar o parênteses quando usar o OR.
         */
        var_dump($z);
        $z = ($y OR $x);
        var_dump($z);
        $z = false;
        $z = $x || $y; //Vai retornar true porque || tem precedência maior que o operador de atribuição.
        // Que também é equivalente a $z = ($y OR $x).
        var_dump($z);
        $a = 1_234_567; // número decimal (a partir do PHP 7.4.0). O PHP irá remover os sublinhados, é bom colocar para melhor leitura.
        var_dump($a);

    ?>
</body>
</html>
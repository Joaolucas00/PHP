<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Controle PHP</title>
</head>
<body>
    <?php 
        // condição simples
        $a = 13;
        $b = 14;
        if ($a < $b) echo "$a é menor que $b";

        // else if ou elseif
        if ($a < $b) {
            echo "$a é menor que $b";
        } else if ($a === $b) {
            echo "$a é indêntico a $b";
 
        } else {
            echo "$a é maior que $b";
        }

        // Estrutura de Repetição while
        echo <<<ITEM
                <br>
                <hr>
        ITEM;
        $i = 1;
        while ($i <= 10) {
            echo "<br>" . $i;
            $i++;
        }
        echo "<hr>";
        // Estrutura de Repetição do-while

        do {
            static $num = 0;
            echo "<br> $num";
            $num += 1;
        } while ($num <= 10);
        echo "<hr>";
       
        
        // Estrutura de Repetição for

        for ($cc = 0; $cc <= 10; $cc++) {
            echo "<br>$cc";
        }
        
        // sem a parte do meio
        for ($cont = 1; ; $cont++) {
            if ($cont > 5) {
                break;
            }
            echo "$cont";
        }

        // sem nada
        $count = 0;
        for(; ; ) {
            if ($count > 10) {
                break;
            }
            echo "<br>" . $count;
            $count++;
        }

        // Usando for com array

        $array = [["João", 18], ["Lucas", 19], ["Luan", 20]];
        for ($i=0; $i < count($array); $i++) { 
            for ($k=0; $k < count($array[$i]); $k++) { 
                echo $array[$i][$k];
            }
        }
        echo "<hr>";

        // Estrutura de controle foreach
        $arr = [1, 2, 3, 4];
        foreach ($arr as &$value) { // tem que colocar & para atribuir por referência
            $value = $value * 2;
        }
        var_dump($arr);
        echo "<br>";
        unset($value); // quebra a referência com o último elemento
        var_dump($arr); // $arr é (2, 4, 6, 8) agora

        // outra forma de fazer a mesma coisa
        foreach (array(1, 2, 3, 4) as &$valor) {
            $valor = $valor * 2;
        }
        unset($valor);
        echo "<hr>";

        //Obs: O foreach não possui suporte a habilidade de suprimir mensagens de erro utilizando @.
        $a = array(
            "um" => 1,
            "dois" => 2,
            "Três" => 3,
            "quatro" => 4,
        );

        foreach ($a as $k => $v) { // $k é a chave e $v é o valor da chave
            echo "\$a[$k] => $v. <br>";
        }

        // Testando foreach com matrizes
        echo "<br>";
        $matriz = [[0, 1], [0, 1]];

        foreach ($matriz as $val_1) {
            foreach ($val_1 as $val_2) {
                echo "$val_2 <br>";
            }
        }

        // Desempacotar arrays aninhados com o construtor list()

        $outraMatriz = [
            [1, 2],
            [3, 4],
        ];

        foreach ($outraMatriz as list($a, $b)) {
            // $a contém o primeiro elemento do array aninhado
            // $b contém o segundo elemento
            echo "A: $a; B: $b <br>";
        }

        // você pode colocar menos elementos ao construtor list(), os demais serão ignorados

        foreach ($outraMatriz as list($elemento_1)) {
            echo "$elemento_1";
        }

        foreach ($outraMatriz as list($a, $b, $c)) {
            echo "A: $a; B: $b; C: $c;"; 
            // caso não exista elentos suficientes um aviso será lançado
        }
    ?>
</body>
</html>
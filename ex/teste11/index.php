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
        echo "<br>";
        // outra maneira de fazer a mesma coisa
        foreach ($outraMatriz as [$a, $b]) {
            echo "A: $a; B: $b <br>";
        }
        echo "<hr>";
        // break
        // break pode receber um argumento numérico para dizer quantas estruras de repetição alinhadas deverá interromper
        // O padrão é 1

        $um_exemplo = ["um", "dois", "três", "stop!", "quatro"];

        foreach ($um_exemplo as $elemento) {
            if ($elemento == "stop!") {
                break; // também pode ser "break 1"
            }
            echo "<br> $elemento";
        }

        // outro exeplo

        $n1 = 0;
        while (++$n1) {
            switch ($n1) {
                case 5:
                    echo "5 <br>";
                    break;
                case 10:
                    echo "10";
                    break 2; 
                default:
                    break;
            }
        }

        // continue
        // continue serve para pular o resto das outras interações, e continuar a execução na vaçidação da condição
        // Ele também pode receber um argumento numérico para dizer qual estrutura alinhada deve recomeçar
        $vetor_exemplo = [1, 2, 3, 4];
        foreach ($vetor_exemplo as $key => $n) {
            if ($n % 2 == 0) { // se o número é divisível por 2 ele volta para o foreach e recomeça o foreach.
                continue;
            }
            echo "\$vetor_exemplo[$key] => $n"; // Assim só vai aparecer números ímpares
        }
        echo "<hr>";
        // match 
        // diferente do switch, a comparação é uma verificação de identidade (===)
        $comida = "maça";
        $valor_de_retorno = match ($comida) {
            "maça" => "Essa comida é uma maça.",
            "bolo" => "Essa comida é um bolo",
            "Uva" => "Essa comida é uma uva",
        }; // Uma expressão match deve terminar por um ponto e vírgula ;.

        var_dump($valor_de_retorno);
        echo "<br>";
        class Classe {
            public $atributo = 3;
            public function func() {
                return 2;
            }
        
        }

        $var = 3;
        $objeto = new Classe;
        function funcao() {return 0;}
        $resultado = match ($var) {
            funcao() => $var+1,
            $objeto->func() => 2+1,
            $objeto->atributo => 3+1,
        };
        var_dump($resultado);

        $x = 5;
        $a = 5;
        $b = 5;
        $c = 5;

        $res = match ($x) {
            // Este braço de correspondência
            $a, $b, $c => 5,
            //é igual a estes 3 braços de correspondência
            $a => 5,
            $b => 5,
            $c => 5,
        };
        var_dump($res);

        // Usando match como condição

        $idade = 17;

        $r = match (true) {
            $idade >= 60 => "maior de 60",
            $idade >= 25 => "maior de 25",
            $idade >= 18 => "maior de 18",
            default => "menor de 18",
        };

        var_dump($r);

        // outro exemplo
        $txt = "Olá";
        $result = match (true) {
            str_contains($txt, "Hello") || str_contains($txt, "World") => "en",
            str_contains($txt, "Olá") || str_contains($txt, "Mundo") => "pt-br",
        };

        var_dump($result);

        // outro exemplo 

        function f($num) {
            print match (0) {
                $num % 15 => "exemplo 1" . PHP_EOL,
                $num % 3 => "exemplo 2" . PHP_EOL,
                $num % 5 => "exemplo 5" . PHP_EOL,
                default => $num . PHP_EOL,
            };
        }

        for ($cc = 0; $cc <= 100; $cc++) {
            f($cc);
        }
    ?> 
    <a href="include.php">Testando include</a>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
    <style>
        * {
            font-size: 1.4em;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 399;
        }


    </style>
</head>
<body>
    <?php function fim() {echo "<br>"; echo "<hr>";}?>
    <h1>Variável por referência</h1>
    <?php 
        $nome = 'João'; //atribui João a variável $nome
        $var = &$nome; // Referencia $nome através de $var
        $var = "Meu nome é $var"; // Altera $var, e também altera $nome.
        echo $var . " --> variável \$var <br>"; echo $nome . " --> variável \$nome";

        // Apenas varáveis nomeadas podem ser atribuída
        fim();
    ?>

    <h1>Escopo</h1>
    <?php 
        $n1 = 1; // escopo global
        $n2 = 2;

        function soma() { // escopo local
            global $n1, $n2; 
            // Declarando n1 e n2 como globaism, fará com que todas as referências a essas variáveis referênciam a versão global
            // Significa que isso vai alterar a variável global também, mesmo sendo local.

            $n2 = $n1 + $n2;
        }

        soma();
        echo $n2;
        // Outra maneira de fazer com $GLOBALS
        // $GLOBALS existe em qualquer escopo, porque ela é uma superglobal

        $n3 = 3;
        $n4 = 4;

        function sum() {
            $GLOBALS['n4'] = $GLOBALS['n3'] + $GLOBALS['n4'];
        }
        sum();
        echo $n4;
        fim();
    ?>
    <h1>Static</h1>
    <?php 
        function teste() {
            static $a = 0; // a variável $a não vai perder o valor mesmo quando a função for chamada novamente.
            // E não vai reatribuir 0.
            echo $a;
            $a++;
            global $b;
            $b = $a;
        }
        teste(); // imprime 0 e adiciona 1, agora $a é 1
        teste(); // imprime 1 e adiciona 1, agora $a é 2, não vai atribuir 0 novamente porque a variável é estática.
        teste(); // imprime 2 e adiciona 1, agora $a é 3, não vai atribuir 0 novamente porque a variável é estática.
        echo $b;
        echo "<br>";
        // Variáveis estáticas são bastante úteis em funções recursivas.
        // Exemplo:
        function contar() {
            static $count = 0;
            $count++;
            if ($count < 10) {
                contar();
            }
            echo $count;
            $count--;
        }
        contar();
    ?>
</body>
</html>
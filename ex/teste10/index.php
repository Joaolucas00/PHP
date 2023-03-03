<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador ternário e lógicos</title>
</head>
<body>
    <?php
        //alguns testes com operadores de Comparação
        var_dump("1" == "01"); // 1 == 1 -> true
        var_dump("10" == "1e1"); // 10 == 10 -> true
        var_dump(100 >= "1e2"); // 100 == 100 -> true


        $a = (empty($_REQUEST['exemplo'])) ? null: $_REQUEST['exemplo'];
        var_dump($a);

        // a expressão acima é idêntico a este if/else abaixo

        if (empty($_REQUEST['exemplo'])) {
            $a = null;
        } else {
            $a = $_REQUEST['exemplo'];
        }
        var_dump($a);

        // mais de um operador ternário ao mesmo tempo
        echo ((true?'true':false)?'a':'b'); // Imprime: a 
        // é avaliado da esquerda para a direita, mas é bom colocar os parênteses para facilitar a leitura do código

        // operador de coalescência nula (??)
        $exemplo = $_REQUEST['exemplo'] ?? null; // se a primeira opção for false, a segunda é atribuída.
        var_dump($exemplo);

        // é a mesma coisa que:

        if (isset($_REQUEST['exemplo'])) {
             $exemplo = $_REQUEST['exemplo'];
        } else {
            $exemplo = null;
        }

        // A parte legal do operador de coalescência nula é que ele pode ser alinhado
        $var1 = null;
        $var2 = null;
        $var3 = 0;
        $var4 = '4';
        var_dump($var1 ?? $var2 ?? $var3 ?? $var4);
        echo "<br><hr>";

        // operador de controle de erro (@)
        // Erro intencional
        //$arquivo = @file('arquivo_nao_existente') or die ("Falha abrindo o arquivo: '\$php_errormsg'");
        // Ele tentará fazer a ação que está prefixada, senão conseguir vai disparar o que está após o dele (or die).
        // Caso track_errors estiver habilitado, qualquer mensagem de erro será gravada na variável $php_errormsg.
        // Esta variável será sobrescrita em cada erro.


        // Concatenação ('.') e ('.=')
        // Exemplo: 
        $varx = "Olá, ";
        $vary = $varx . "Mundo!";
        echo "$vary";

        $varx = "Olá, ";
        $varx .= "Mundo!";
        echo $varx;

    ?>


    <?php 
        $vetor_a = array(1 => 'a', 2=> 'b', 3 => 'c');
        $vetor_b = array(4 => 'd', 5 => 'e', 6 => 'f');
        $juncao_a_b = ($vetor_a + $vetor_b);
        echo "<br> <pre>";
        var_dump($juncao_a_b);
        echo "</pre>";
        // Para chaves que existam nos dois arrays os elementos do array à esquerda serão mantidos, os valores de mesma chave no array da direita são ignorados.
        
        $vetor_c = ["avião", "carro"];
        $vetor_d = [1 => "carro", "0" => "avião"];

        var_dump($vetor_c == $vetor_d); // true
        var_dump($vetor_c === $vetor_d); // false

        // vetor_c == vetor_d: true se $vetor_c e $vetor_d tem os mesmos pares de chave/valor.
        // vetor_c === vetor_d: true se $vetor_c e $vetor_d tem os mesmos pares de chave/valor na mesma ordem e do mesmo tipo.
        
        var_dump($vetor_a != $vetor_b); // true
        echo "<br> <hr>";
        // Operadores de tipo
        
        class Exemplo {}

        class outroExemplo {}

        $exemplo = new Exemplo;

        // instanceof, usado para determinar se a variável é um objeto instanciado de uma classe:
        var_dump($exemplo instanceof Exemplo); // true
        var_dump($exemplo instanceof outroExemplo); // false

        // também ser usado para determinar se é instanciado de uma classe que herda a classe pai:
        class classePai {}

        class classFilho extends classePai {}

        $filho = new classFilho;

        var_dump($filho instanceof classePai); // true
        var_dump($filho instanceof classFilho); // true

    ?>
</body>
</html>
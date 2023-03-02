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

    ?>
</body>
</html>
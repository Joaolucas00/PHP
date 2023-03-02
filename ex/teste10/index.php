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
        $exemplo = $_REQUEST['exemplo'];
    ?>
</body>
</html>
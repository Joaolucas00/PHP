<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php function fim() {echo "<br>"; echo "<hr>";}?>
    <?php 
        function addElementArray(array &$vetor) {$vetor[] = 1;}
        $var = [];
        addElementArray($var);
        var_dump($var);
        addElementArray($var);
        var_dump($var);
        fim();
    ?>
    <?php 
        // Declaração de tipo de retorno básico
        function soma($a, $b): float {return $a + $b;}
        var_dump(soma(1, 4));
        fim();
    ?>
    <?php 
        //Declaração de tipo de argumento anulável
        class C {}
        
        function f(?C $c) {
            var_dump($c);
        }
        
        f(new C);
        f(null);
        fim();
    ?>
    <?php
        /** Tipagem estrita
         * Por padrão, o PHP forçará valores do tipo errado na declaração de tipo escalar esperada, se possível.
         * Se um função tem como parâmetro int e for dada um parâmetro float,
         *  o valor retornado será int.
         *  No modo estrito, apenas um valor correspondente exatamente à declaração do tipo será aceito, senão um TypeError será lançado.
         */
        //declare(strict_types=1); senão for colocada como a primeira declaração do script lança um Fatal error.
        //Fatal error: strict_types declaration must be the very first statement in the script in C:\xampp\htdocs\curso-php\ex\teste06\index.php on line 45

        function sum(int $a, int $b) {
            return $a + $b;
        }

        var_dump(sum(1, 2));
        //var_dump(sum(1.5, 2.5)); não funciona com strict_types ativado, lança um TypeError

    ?>
</body>
</html>
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
    ?>
    <?php 
        // Declaração de tipo de retorno básico
        function soma($a, $b): float {return $a + $b;}
        var_dump(soma(1, 4));
    ?>
</body>
</html>
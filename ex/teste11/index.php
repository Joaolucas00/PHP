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

    ?>
</body>
</html>
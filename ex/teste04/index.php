<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP string </title>
</head>
<body>
    
    <?php 
        // Imprime: Arnold disse uma vez: "I'll be back"
        echo 'Arnold disse uma vez: "I\'ll be back."';
        // Imprime: Contra barra \
        echo '<br>Contra barra \\';
        // Imprime: Use tag br para quebrar a linha em vez de \n.
        echo '<br>Use tag br para quebrar a linha em vez de \\n.';
        // Imprime: Variáveis não funcionam dentro de aspas simples pois não é interpretado
        echo '<br>Variáveis não funcionam dentro de aspas simples pois não é interpretado';
    ?>
    <pre>
    <?php // Usando heredoc com vetor
        $values = [<<<END
        a
          b
            c
        END, 'd e f'];
        echo "<br>";
        
        var_dump($values);
    
    
    ?>
    </pre>

    <p>
    <?php 
        /**
         * Nowdocs estão para aspas simples assim como os heredocs estão para 
         * aspas duplas em strings. Um nowdoc é especificado similarmente a um 
         * heredoc, mas nenhuma interpretação é feita dentro de um nowdoc. 
         */
    
        echo <<<'END'
        <pre>
        Exemplo de string abrangendo várias linhas
        usando a sintaxe nowdoc. As barras invertidas são sempre tratadas literalmente,
        por exemplo. \\ e \'.
        Isso é bom para grandes blocos de texte e que contem um código PHP.
        copiando o código que gerou este texto: 

        < ? p h p
        /**
         * Nowdocs estão para aspas simples assim como os heredocs estão para 
         * aspas duplas em strings. Um nowdoc é especificado similarmente a um 
         * heredoc, mas nenhuma interpretação é feita dentro de um nowdoc. 
         */
    
        echo <<<'END'
        Exemplo de string abrangendo várias linhas
        usando a sintaxe nowdoc. As barras invertidas são sempre tratadas literalmente,
        por exemplo. \\ e \'.
        Isso é bom para grandes blocos de texte e que contem um código PHP.
        ~END;
        ?>
        </pre>
        END;
    ?>
    </p>

    <?php // Podemos envolver o nome da variável com chaves para especificar explicitamente o fim do nome.
        $suco = "maça";
        echo "Ele bebeu um suco feito de ${suco}s.";
    ?>

<pre>
<?php
$sucos = array("maçã", "laranja", "koolaid1" => "roxo");

echo "Ele bebeu um pouco de suco $sucos[0]".PHP_EOL;
echo "Ele bebeu um pouco de suco $sucos[1].".PHP_EOL;
echo "Ele bebeu um pouco de suco $sucos[koolaid1].".PHP_EOL;

class Pessoa {
    public $john = "João Silva";
    public $jane = "Jane Smith";
    public $robert = "Robert Paulsen";

    public $smith = "Smith";
}

$pessoa = new pessoa();

echo "$pessoa->john bebeu um pouco de suco de $sucos[0].".PHP_EOL;
echo "$pessoa->john então disse olá para $pessoa->jane.".PHP_EOL;
echo "Esposa de $pessoa->john cumprimentou $pessoa->robert.".PHP_EOL;
echo "$pessoa->robert cumprimentou os dois {$pessoa->smith}s."; // Não vai funcionar se não usar chaves
?>
</pre>
</body>
</html>
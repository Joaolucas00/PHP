<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes PHP</title>
</head>
<body>
    <?php 
        include_once 'classe-caneta.php';

        $c1 = new Caneta; // se não há argumentos a ser passado para o construtor, o parênteses é opcional.

        $c1->cor = "Vermelho";
        $c1->ponta = 0.5;
        $c1->carga = 90;
        $c1->tampada = true;

        $c1->rabiscar();
        $c1->destampar();
        $c1->rabiscar();

        // pode ser feito com variável também
        $classNome = 'Pessoas';
        $instancia = new $classNome();
        var_dump($instancia);
        echo "<br>";

        // Atribuição de Objetos

        $objPessoas = new Pessoas;

        $pessoa = $objPessoas;
        $_pessoa = &$objPessoas;

        $objPessoas->nome = "João";

        $objPessoas = null; // objPessoas e $_pessoa se tornam nulos, isso porque eles apontam para o mesmo dado.

        var_dump($objPessoas);
        var_dump($_pessoa);
        var_dump($pessoa);
    
    
    ?>
</body>
</html>
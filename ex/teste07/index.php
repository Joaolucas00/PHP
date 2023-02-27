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
    <h1>Variável por referência</h1>
    <?php 
        $nome = 'João'; //atribui João a variável $nome
        $var = &$nome; // Referencia $nome através de $var
        $var = "Meu nome é $var"; // Altera $var, e também altera $nome.
        echo $var . " --> variável \$var <br>"; echo $nome . " --> variável \$nome";
    ?>
</body>
</html>
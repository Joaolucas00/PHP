<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes PHP</title>
</head>
<body>
    <pre>
    <?php 
        const TESTE1 = 1;
        const TESTE2 = 2;
        const TESTE3 = 3;
        define("TESTE4", 4);
        define("TESTE5", 5);
        var_dump(defined('TESTE1')); // defined() verifica se a constante está definida
        if (defined('TESTE1')) {
            var_dump(constant('TESTE1')); // constant() para verificar o valor da constante
        }
        else {
            echo "Constante não definida";
        }

        //var_dump(get_defined_constants()); // para obter todas as contantes definidas.
    ?>    
    </pre>


</body>
</html>
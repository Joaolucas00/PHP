<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções PHP</title>
</head>
<body>
    <?php 
        // função dentro de função
    function funcao () {
        function outra_funcao() {
            echo "outra_funcao não existe até que funcao seja chamada";
        }    
    }

    
    // nãp pode chamar outra_funcao ainda porque não está definida
    funcao();

    // agora podemos

    outra_funcao();

    // função recursiva

    function funcao_recursiva ($num) {
        if ($num <= 20) {
            echo "$num <br>";
            funcao_recursiva($num + 1);
        }
    }

    funcao_recursiva(2);

    // pegando vários argumentos

    function pega_varios_argumentos (
        $primeiro,
        $segundo,
        $outro_argumento,
        $parametro_com_default = 5,
        $terceiro = 'argumento padrão', // antes do PHP 8.0.0, não era permitido vírgula no final
    )
    {
        // code...
    }

    // passando por refêrencia

    // Por padrão, argumentos de função são passados por valor (de forma que se você mudar o valor do parâmetro dentro da função, ele não é alterado fora da função)
    
    function adicionando_alguma_coisa(&$arg) 
    {
        $arg .= "concatenada com isso";
    }

    $str = "Isto é uma string, ";
    adicionando_alguma_coisa($str);
    echo "$str";

    ?>
</body>
</html>
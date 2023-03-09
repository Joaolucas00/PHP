<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador de Resolução de Escopo(::)</title>
</head>
<body>
    <?php 
        /**
         *  O Operador de Resolução de Escopo (também chamado de Paamayim Nekudotayim), 
         * ou em termos mais simples, dois pontos duplo, é um símbolo que permite acesso a métodos ou propriedades estáticas, 
         * constantes, e sobrecarregadas de uma classe.
         */
    
         class Classe {
            const CONST_VALOR = "Valor da constante";
         }

         $nome_da_classe = 'Classe';
         echo $nome_da_classe::CONST_VALOR;
         echo Classe::CONST_VALOR;

         class OutraClasse extends Classe {
            public static $variavel_estatica = "Variável estática";

            public static function funcao_estatica() {
                echo parent::CONST_VALOR;
                echo self::$variavel_estatica;
            }
         }

         $nome_da_classe = 'OutraClasse';
        echo $nome_da_classe::funcao_estatica();

        OutraClasse::funcao_estatica();
    
    ?>
</body>
</html>
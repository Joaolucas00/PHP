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

use Exemplo as GlobalExemplo;

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

        // outra maneira de criar objetos

        class Teste {
            static public function getNew() {
                return new static;
            }
        }

        class Child extends Teste {}

        $obj_1 = new Teste();
        $obj_2 = new $obj_1;
        var_dump($obj_1 !== $obj_2);

        $obj_3 = Teste::getNew();
        var_dump($obj_3 instanceof Teste);

        $obj_4 = Child::getNew();
        var_dump($obj_4 instanceof Child);
    
        echo "<hr>";
        

        //  Chamando uma função anônima armazenada em uma propriedade

        class Exemplo {
            public $var;
            public $arrowF;

            public function __construct() // método construtor
            {
                $this->var = function() {return 50;}; // função anônima
                $this->arrowF = fn() => 50; // arrow function
            }
        }

        $exemplo = new Exemplo();

        echo ($exemplo->var)();
        echo ($exemplo->arrowF)();
        
        /** OBS:
         * Propriedades não estáticas são chamadas com -> (operadore de objeto)
         * Propriedades estáticas são acessadas utilizando o operador :: (duplo dois pontos)
         */

         // Exemplo de propriedades tipadas
         class A {
            public int $inteiro;
            public ?string $str; // ? para poder ser null

            public function __construct(int $inteiro, ?string $str) // mesma coisa aqui.
            {
                $this->inteiro = $inteiro;
                $this->str = $str;
            }
         }

         $a = new A(2023, null);

         var_dump($a->inteiro);
         var_dump($a->str);
    ?>
</body>
</html>
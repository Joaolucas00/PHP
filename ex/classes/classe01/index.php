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

         // OBS:
         //Propriedades tipadas precisam ser inicializadas antes de serem acessadas, senão um Error é lançado.
         class A {
            public int $inteiro;
            public ?string $str; // ? para poder ser null

            public function __construct(int $inteiro, ?string $str) // mesma coisa aqui.
            {
                $this->inteiro = $inteiro;
                $this->str = $str;
            }

            public function void(): void { // void indica que a função não vai ter retorno.
                // return 0; lança um Fatal error.
                // Fatal error: A void function must not return a value in C:\xampp\htdocs\curso-php\ex\classes\classe01\index.php on line 106 
            }
         }

         $a = new A(2023, null);

         var_dump($a->inteiro);
         var_dump($a->str);

         // Propriedades somente leitura
         // A partir do PHP 8.1.0, uma propriedade pode ser declarada com o modificador readonly, o que previne modificação da propriedade após a inicialização

         class B {
            public readonly string $atributo;

            public function __construct(string $atributo)
            {   // inicialização permitida
                $this->atributo = $atributo;
            }
         }
        
         $b = new B('Olá');
         // Pode ser lido
         var_dump($b->atributo);
         // Modificação ilegal. Não importa que o valor seja o mesmo.
        //$b->atributo = "Mundo";
        // Error: Cannot modify readonly property Test::$prop
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final PHP</title>
</head>
<body>
    <?php 
        /**
         * A palavra-chave final, previne que classes filhas sobrescrevam uma definição prefixada com final. 
         * Se a própria classe estiver definida como final, 
         * ela não pode ser herdada.
         */
    
         /** Nota: 
          * Propriedades não podem ser declaradas finais: somente classes, métodos e constantes (a partir do PHP 8.1.0). 
          * A partir do PHP 8.0.0, métodos privados não podem ser declarados privados, com exceção do construtor.
          */

          // classe final
          final class A {}

          class B extends A {}

          // Fatal error: Class B cannot extend final class A 

          // método final
          class C {
            final public function teste() {}
          }

          class D extends C {
            // public function teste() {} da erro
          }
        
          
          // constante final (PHP 8.1.0 em diante)
          class E {
            final public const CONSTANTE = "constante";
          }

          class F extends E {
           // public const CONSTANTE = "Isso da erro";
          }
          // Fatal error: F::CONSTANTE cannot override final constant E::CONSTANTE


          /**
           *    Classe Abstrata
           *  Não pode ser instanciada. Só pode servir como progenitora
           * 
           *    Método Abstrato
           *  Declarado, mas não implementado na progenitora
           * 
           *    Classe Final
           *  Não pode ser herdada por outra classe. Obrigatoriamente folha
           * 
           *    Método Final
           *  Não pode ser sobrescrito pelas sub-classes. Obrigatoriamente herdado
           * 
           */



    ?>
</body>
</html>
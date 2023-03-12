<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covariance and Contravariance PHP</title>
</head>
<body>
    <?php 
        // Covariance and Contravariance
        /** No PHP 7.2.0, a contravariância parcial foi introduzida removendo as restrições de tipo nos parâmetros de um método filho. 
         * A partir do PHP 7.4.0, o suporte completo para covariância e contravariância foi adicionado. */

         class Comida {}

         class Comida_de_Animal extends Comida {}

         abstract class Animal {
            protected string $nome;

            public function __construct(string $nome)
            {
                $this->nome = $nome;
            }

            abstract public function falar();

            public function comer(Comida_de_Animal $comida) {
                echo $this->nome . " come " . get_class($comida);
            }
         }

         class Cachorro extends Animal {
            public function falar() {
                echo $this->nome . " Au! Au!";
            }

            public function comer(Comida $comida) {
                echo $this->nome . " come " . get_class($comida);
            }
         }

         class Gato extends Animal {

            public function falar() {
                echo $this->nome . " Miau.";
            }
         }
         
         interface Abrigo_de_animais {
            public function adotar(string $nome): Animal;
         }

         class Abrigo_de_gatos implements Abrigo_de_animais {
            public function adotar(string $nome): Gato {
                return new Gato($nome);
            }
         }
         
         class Abrigo_de_cachorro implements Abrigo_de_animais {
            public function adotar(string $nome): Cachorro {
                return new Cachorro($nome);
            }
         }

         $gato = (new Abrigo_de_gatos)->adotar("Ricky");
         $gato->falar();
         $comida_para_gato = new Comida_de_Animal();
         $gato->comer($comida_para_gato);
         echo "<br>";

         $cachorro = (new Abrigo_de_cachorro)->adotar("Caramelo");
         $cachorro->falar();
         $banana = new Comida();
         $cachorro->comer($banana);
         echo "<br>";

         // E se gato comer $banana?
         $gato->comer($banana);
         // Fatal error: Uncaught TypeError: Animal::comer(): Argument #1 ($comida) must be of type Comida_de_Animal, Comida given, called

    ?>
</body>
</html>
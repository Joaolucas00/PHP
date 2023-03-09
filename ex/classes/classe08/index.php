<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstração de Classes</title>
</head>
<body>
    <?php 
        /** Classes definidas como abstratas não podem ser instanciadas, 
         * e qualquer classe que contenha ao menos um método abstrato também deve ser abstrata. */

        abstract class ClasseAbstrata {
            // Força a classe que estende ClasseAbstrata a definir esse método
            abstract protected function pegarValor(); // com ponto e vírgula no final
            abstract protected function valorComParametro ($parametro);

            public function imprimir() {
                echo $this->pegarValor();
            }
        }

        class Classe1 extends ClasseAbstrata {
            protected function pegarValor() {
                return "Classe1";
            }

            public function valorComParametro($parametro) {
                return "{$parametro}Classe1";
            }
        }

        class Classe2 extends ClasseAbstrata {
            protected function pegarValor()
            {
                return "Classe2";
            }

            public function valorComParametro($p) {
                return "{$p}Classe2";
            } 
        }

        $classe1 = new Classe1;
        $classe1->imprimir();
        echo $classe1->valorComParametro("Ola");

        $classe2 = new Classe2;
        $classe2->imprimir();
        echo $classe2->valorComParametro("Mundo");


    ?>
</body>
</html>
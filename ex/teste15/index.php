<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test 15</title>
</head>
<body>
    <?php

use Classe2 as GlobalClasse2;

        interface i {
            public function getAtributo();
        }
    
        class Classe1 implements i {
            private $atributo;
            public function __construct(string $atributo)
            {
                $this->atributo = $atributo;
            }

            public function getAtributo() {
                return $this->atributo;
            }
        }

        class Classe2 {
            public static function returnClasse1 (string $str) {
                return new Classe1("Olá, " . $str);
            }
        }

        $obj = new Classe2;

        $obj2 = $obj->returnClasse1("Mundo!");
        echo $obj2->getAtributo();
        echo "<hr>";
        var_dump($obj);
        echo "<hr>";
        var_dump($obj2);

    
    ?>
</body>
</html>
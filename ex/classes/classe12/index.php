<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iteração de Objetos PHP</title>
</head>
<body>
    <?php

use MinhaClasse as GlobalMinhaClasse;

    /**
     * O PHP fornece uma maneira de definir objetos para que seja possível iterar por uma lista de itens, como, por exemplo, 
     * a instrução foreach. Por padrão, todas as propriedades visíveis serão utilizadas para a iteração.
     */
    
     class MinhaClasse {
        public $atr1 = "Atributo 1";
        public $atr2 = "Atributo 2";
        public $atr3 = "Atributo 3";

        protected $protegido = "Atributo protegido";
        private $privado = "Atributo privado";

        function iterateViseble() {
            echo "MinhaClasse::iterateViseble: <br>";
            foreach ($this as $chave => $valor) {
                print "$chave => $valor <br>";
            }
        }
     }
    $obj = new MinhaClasse();

    foreach ($obj as $k => $v) {
        print "$k => $v <br>";
    }
    // assim da pra mostrar o estado do objeto
    $obj->iterateViseble();


    ?>
</body>
</html>
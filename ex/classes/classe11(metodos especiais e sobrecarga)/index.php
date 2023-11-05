<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobrecarga PHP</title>
</head>
<body>
    <?php 
        // Todos os métodos de sobrecarga devem ser definidos como públicos.
        /**
         * A interpretação do PHP de sobrecarga é diferente da maioria das linguagens orientadas a objeto.
         *  Sobrecarga, tradicionalmente, provê a habilidade de ter múltiplos métodos com o mesmo nome, 
         * mas com quantidades e tipos de argumentos diferentes.
         */



        /**
         * __set() é executado ao escrever dados em propriedades inacessíveis (private ou protected) ou propriedades inexistentes.
         * 
         * __get() é utilizado para ler dados de propriedades inacessíveis (private ou protected) ou propriedades inexistentes.
         * 
         * __isset() é disparado ao chamar a função isset() ou empty() em propriedades inacessíveis (private ou protected) ou propriedades inexistentes.
         * 
         * __unset() é invocado ao usar o construtor unset() em propriedades inacessíveis (private ou protected) ou propriedades inexistentes.
         * 
         * 
         * O argumento $name é o nome da propriedade com o qual se está interagindo. 
         * O argumento $value do método __set() especifica o valor para o qual a propriedade $name deveria ser definida.
         * 
         * 
         * 
         * A sobrecarga de propriedades funciona somente no contexto de objeto. Estes métodos mágicos não são disparados em contexto estático. 
         * Portanto estes métodos não podem ser declarados como static. 
         * Um aviso é emitido se algum método mágico de sobrecarga é declarado como static.
         * 
         */

        // Sobrecarregando propriedades com __get(), __set(), __isset() and __unset()

        class PropriedadeTeste {
            private $arr = array();

            public $num = 1;

            private $dois = 2;

            public function __set($name, $value)
            {
                echo "Setting $name to $value";
                $this->arr[$name] = $value;
            }

            public function __get($name)
            {
                echo "Getting $name";
                if (array_key_exists($name, $this->arr)) {
                    return $this->arr[$name];
                }
                $trace = debug_backtrace();
                trigger_error(
                    'Undefined property via __get(): ' . $name .
                    ' in ' . $trace[0]['file'] .
                    ' on line ' . $trace[0]['line'],
                    E_USER_NOTICE);
                return null;
            }

            public function __isset($name)
            {
                echo "Is '$name' set? ";
                return isset($this->arr[$name]);
            }

            public function __unset($name)
            {
                echo "Unsetting '$name'\n";
                unset($this->arr[$name]);
            }
                /**  Not a magic method, just here for example.  */
            public function getHidden()
            {
                return $this->dois;
            }
        }
        echo "<pre>";
        $obj = new PropriedadeTeste;
        $obj->a = 11;
        echo $obj->a;
        
        var_dump(isset($obj->a));
        unset($obj->a);
        var_dump(isset($obj->a));
        echo "<br>";
        echo "</pre>";

        echo "$obj->num";

        echo $obj->getHidden() . "<br><br>";
        echo "Privates not visible outside of class, so __get() is used...\n";
        echo $obj->dois . "<br>";
        
        echo "<br>";
        // Sobrecarga de métodos instanciados com __call() e __callStatic()


        /**
         * __call() é disparado ao invocar métodos inacessíveis em um contexto de objeto.
         * 
         * __callStatic() é disparado quando invocando métodos inacessíveis em um contexto estático.
         * 
         * O argumento $name é o nome do método sendo chamado. 
         * O argumento $arguments é um array enumerado contendo os parâmetros passados para o método $name.
         * 
         */





        class metTeste {
            public function __call($name, $arguments)
            {
                echo "Chamando o método $name" . implode(', ', $arguments);
            }
            public static function __callStatic($name, $arguments)
            {
                echo "Chamando o método estático $name" . implode(', ', $arguments);
            }
        }

        $_obj = new metTeste;
        $_obj->runTest(' no contexto objeto', 0);
        echo "<br>";
        metTeste::runTeste(' no contexto static');
    ?>
</body>
</html>
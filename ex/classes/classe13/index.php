<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos Mágicos</title>
</head>
<body>
    <?php 
        // __invoke()

        // O método __invoke() é chamado quando um script tenta chamar um objeto como uma função.
    
        // Usando __invoke()

        class CallableClass {
            public function __invoke($param)
            {
                var_dump($param);
                /** code... */
            }
        }

        $obj = new CallableClass;
        $obj(0); // usando um objeto como se fosse uma função
        var_dump(is_callable($obj)); // true


        // __toString()

        // O método __toString() permite que uma classe decida como se comportar quando convertida para uma string. 
        // Por exemplo, o que echo $obj; irá imprimir.
        class TestClass
        {
            public $atr;

            public function __construct($atr)
            {
                $this->atr = $atr;
            }

            public function __toString()
            {
                return $this->atr;
            }
        }

        $class = new TestClass('Olá');
        echo $class;
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes anônimas PHP</title>
</head>
<body>
    <?php 

        // $classeAnonima = new class {public function ola() {echo "Ola";}};
        $classeAnonima = new class {
            public $propriedade;
            public function ola() {
                echo "Ola";
            }
        };
        
        $classeAnonima->ola();
        $classeAnonima->propriedade = "Mundo";
        echo "<pre>";
        var_dump($classeAnonima);
        echo "</pre>";
    
    
    ?>
</body>
</html>
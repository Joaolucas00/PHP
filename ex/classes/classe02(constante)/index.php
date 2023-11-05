<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes PHP</title>
</head>
<body>
    <?php 
        include 'classes.php';

        $const = new Constantes;

        $const->mostrarConstante();
        Constantes::mostrarConstante();
        echo Constantes::CONSTANTE;
    
        echo "O valor de const TRES é " . Constantes::TRES 

    
    ?>
</body>
</html>
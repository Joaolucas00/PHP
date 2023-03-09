<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibilidade PHP</title>
</head>
<body>
    <?php 
        include 'classe.php';

        $teste = new Teste('test');

        $teste->metPublico(new Teste('test'));
    
    
    
    ?>
</body>
</html>
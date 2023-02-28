<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coordenadas da imagem que você clicou</title>
    <style>
        * {
            font-size: 1.4em;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 399;
        }
    </style>
</head>
<body>
    <?php 
        echo "Valor de x: " . $_GET['coordenada_x'];
        echo "<br>";
        echo "Valor de y: " . $_GET['coordenada_y'];
    
    ?>
</body>
</html>
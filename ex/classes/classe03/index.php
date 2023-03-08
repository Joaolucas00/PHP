<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construtores PHP</title>
</head>
<body>
    <?php
        include 'classes.php'; 

        $paiCLass = new ClassePai();
        $filhaClass = new ClasseFilha(); 
        $subClass = new subClass();


        // passagens de ambos os argumentos
        $e1 = new CLasseExemplo(0, 2);

        // passagem de um argumento obrigatório, y padrão zero
        $e2 = new CLasseExemplo(5);

        // com parâmetro nomeados (a partir do PHP 8.0)
        $e3 = new CLasseExemplo(y: 3, x: 4);

        $c1 = new Classe(4);
        echo $c1->x;
        echo $c1->y;


    ?>
</body>
</html>
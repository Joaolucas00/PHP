<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        p {
            color: white;
        }

    </style>
</head>
<body>
    <?php 
        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];
    ?>
    <main>
    <header>
        <h1>Olá, <?php 
                echo "$nome!";
        ?></h1>
    </header>
    <section>
        <p><?php 
            echo "É um prazer te conhecer, $nome $sobrenome"
        ?>    
        </p>
    </section>
    </main>
</body>
</html>
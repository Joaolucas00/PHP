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
        a {
    color: rgb(192, 226, 241);
    font-style: normal;
    text-decoration: none;
    }

    a:hover {
        color: rgb(122, 217, 255);
        text-decoration: underline;
    }
    </style>
</head>
<body>
    <?php 
        $nome = $_GET["nome"] ?? null; // O operador de coalescência nula ( ?? )
        $sobrenome = $_GET["sobrenome"] ?? null; // Se ele não existir $_GET(sobrenome), o depois de (??) vai ser jogado na variável
    ?>
    <main>
    <header>
        <h1><?php 
            if(isset($_GET["nome"]) || isset($_GET["sobrenome"])) {
                echo "Olá, $nome!";
            }
            else {
                echo "Houve um problema!";
            }
        ?></h1>
    </header>
    <section>
        <p><?php 
            if (isset($_GET["nome"]) || isset($_GET["sobrenome"])) {
            echo "É um prazer te conhecer, $nome $sobrenome ";
            }
            else {
                echo "Houve algum problema, tente novamente.";
            }
        ?>  
        <a href="javascript:history.go(-1)"><br>Voltar para a página anterior.</a>  
        </p>
    </section>
    </main>
</body>
</html>
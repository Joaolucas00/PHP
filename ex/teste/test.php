<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Dado enviado com sucesso!</h1>
    <p>Testando variáveis externas de formulários.</p>
    <?php 
        $nome = $_POST['nome'];
        $array = $_POST['personal'];
        $idade = (int) $_POST['idade'];
        echo "$array[1]";
        echo '<pre>';
        echo htmlspecialchars(print_r($_POST, true));
        echo '</pre>';
        echo "Olá, você se chama $nome, e tem $idade anos";
    ?>
</body>
</html>
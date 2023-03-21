<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserindo dados no banco de dados com php</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php 
    include 'conexao.php';
        // inserindo dados
    
    ?>
    <form action="" method="get">
        <label for="inome">nome: </label>
        <input type="text" name="nome" id="inome"> <br>
        <label for="curso_"></label>
        <input type="submit" value="Cadastrar" id="in_submit">
    </form>

</body>
</html>
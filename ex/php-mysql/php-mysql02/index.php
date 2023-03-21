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
        <label for="icurso_pref">curso preferido</label>
        <input type="number" name="curso_pref" id="icurso_pref"> <br>
        <label for="iprofissao">profissao</label>
        <input type="text" name="profissao" id="iprofissao"> <br>
        <label for="inasc">nascimento</label>
        <input type="date" name="nasc" id="inasc"> <br>
        <label for="isexo">sexo:</label> <br>
        <label for="iM">Masculino</label>
        <input type="radio" name="sexo" id="iM" checked value="M">
        <label for="iF">Feminino</label>
        <input type="radio" name="sexo" id="iF" value="F">


        <br>
        <input type="submit" value="Cadastrar" id="in_submit">
    </form>

</body>
</html>
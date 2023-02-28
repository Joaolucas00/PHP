<?php header("Content-type: text/html; charset=utf-8");
    setcookie("Teste", null); // Teste para especificar o cookie a ser excluído, null para anular o cookie.
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluindo cookie</title>
</head>
<body>
    <a href="ler-cookie.php">Cookie excluido</a>
    <a href="index.php">Criar cookie</a>
</body>
</html>
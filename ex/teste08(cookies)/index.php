<!DOCTYPE html>
<?php 
    $nome = "Teste"; // nome do cookie
    $valor = 50; // o que tu quer armazenar no usuário. Pode ser qualquer coisa, uma string, mensagem e etc.
    $expira = time() + 3600; // o tempo que o cookie expira. 3600 segundos, uma hora.
    setcookie($nome, $valor, $expira);
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armazenando cookies</title>
</head>
<body>
    <p>
        Cookie gravado no navegador!
    </p>
    <a href="ler-cookie.php">Ler cookie</a>
</body>
</html>
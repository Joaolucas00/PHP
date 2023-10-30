<?php header("Content-type: text/html; charset=utf-8");
// Lendo o cookie. A partir daqui você pode fazer o que quiser com o cookie.
print_r($_COOKIE);
echo "<br>";
if (isset($_COOKIE['Teste'])) { // Verifica se o cookie existe ou não. isset() verifica se o valor está definido, configurado, se ele existe.
    $valor_cookie = $_COOKIE['Teste'];
    echo "O valor do cookie é $valor_cookie"; // Mostra o valor do cookie
}
else {
    echo "Cookie não encontrado";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lendo o cookie</title>
</head>
<body>
    <br> <a href="apagar-cookie.php">Apagar cookie</a>
</body>
</html>
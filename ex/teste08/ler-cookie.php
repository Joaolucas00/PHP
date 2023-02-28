<?php header("Content-type: text/html; charset=utf-8");
// Lendo o cookie. A partir daqui você pode fazer o que quiser com o cookie.
print_r($_COOKIE);
echo "<br>";
if (isset($_COOKIE['Teste'])) { // Verifica se o cookie existe ou não. isset() verifica  se o valor está definido, configuradom, se ele existe.
    $valor_cookie = $_COOKIE['Teste'];
    echo "O valor do cookie é $valor_cookie"; // Mostra o valor do cookie
}
else {
    echo "Cookie não encontrado";
}

?>
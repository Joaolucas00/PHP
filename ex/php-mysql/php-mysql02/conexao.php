<?php 
    $hostname =  "localhost";
    $username = "root";
    $db = "cadastro";
    $senha = '';

    // criando uma conexão
    $conn = new mysqli($hostname, $username, $senha, $db);

    // Verificando se es´ta conectado
    if ($conn->connect_errno) {
        die ("Erro ao conectar: " . $conn->errno);
    }

    /** com PDO
     *  $pdo = new PDO("mysql:host=$hostname;dbname=$db", $username, $senha);
     *  
     *  A conexão será fechada automaticamente quando o script terminar. Para fechar a conexão antes, use:
     * 
     *  mysqli: $conn->close()
     * 
     *  PDO: $pdo = null;
     */

?>
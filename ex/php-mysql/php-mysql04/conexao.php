<?php 
    $server = "localhost";
    $user = "root";
    $senha = '';
    $db = "cadastro";

    $banco_de_dados = new mysqli($server, $user, $senha, $db);

    
    if ($banco_de_dados->connect_error) {
        echo "Erro ao conectar";
    }

    $stmt = $banco_de_dados->prepare("INSERT INTO gafanhotos (curso_preferido, nome) VALUES (?, ?)");
    $stmt->bind_param("is", $cp, $nome);

    $cp = 5;
    $nome = "Alison";
    $stmt->execute();

?>
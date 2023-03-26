<?php 

    $server = "localhost";
    $user = "root";
    $senha = '';
    $db = "cadastro";

    $banco_de_dados = new mysqli($server, $user, $senha, $db);



    if ($banco_de_dados->connect_error) {
        echo "Erro ao conectar";
    }

    $sql = "INSERT INTO gafanhotos (curso_preferido, nome) VALUES ('4', 'pedro')";

    if ($banco_de_dados->query($sql) === true) {
        $last_id = $banco_de_dados->insert_id;
        echo "Novo dado adicionado. Último id inserido:" . $last_id;
    } else {
        echo "Algum erro aconteceu";
    }


?>
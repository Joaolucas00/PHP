<?php 

    // Declarações Preparadas e Parâmetros Vinculados


    $server = "localhost";
    $user = "root";
    $senha = '';
    $db = "cadastro";

    $banco_de_dados = new mysqli($server, $user, $senha, $db);

    
    if ($banco_de_dados->connect_error) {
        echo "Erro ao conectar";
    }

    // prepare e bind

    $stmt = $banco_de_dados->prepare("INSERT INTO gafanhotos (curso_preferido, nome) VALUES (?, ?)");
    // ? é o valor que vai ser informado após o bind_param

    $stmt->bind_param("is", $cp, $nome);
    /** Essa função vincula os parâmetros à consulta SQL e informa ao banco de dados quais são os parâmetros. 
     * O argumento "sss" lista os tipos de dados que são os parâmetros. 
     * O caractere s diz ao mysql que o parâmetro é uma string.
     * 
     *  O argumento pode ser um dos quatro tipos:
     * i - integer
     * d - double
     * s - string
     * b - BLOB
     * 
     *  Ao dizer ao mysql que tipo de dados esperar, minimizamos o risco de injeções de SQL.
     */

    // define parâmetros e executa
    $cp = 5;
    $nome = "Alison";
    $stmt->execute();

    


?>
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
     * O argumento "is" lista os tipos de dados que são os parâmetros. 
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

    // Assim nós podemos inserir vários outros dados
    

    $cp = 23;
    $nome = "Bianca";
    $stmt->execute();

    $cp = 24;
    $nome = "Rodrigo";
    $stmt->execute();

    $cp = 25;
    $nome = "Rafael";
    $stmt->execute();

    $stmt->close();
    $banco_de_dados->close();

    /**   Em comparação com a execução direta de instruções SQL, as instruções preparadas têm três vantagens principais:
     * 
     *     As instruções preparadas reduzem o tempo de análise, 
     * pois a preparação da consulta é feita apenas uma vez (embora a instrução seja executada várias vezes)
     * 
     *     Os parâmetros vinculados minimizam a largura de banda para o servidor, 
     * pois você precisa enviar apenas os parâmetros de cada vez, e não toda a consulta
     * 
     *      As instruções preparadas são muito úteis contra injeções de SQL, porque os valores de parâmetro, 
     * que são transmitidos posteriormente usando um protocolo diferente, 
     * não precisam ser escapados corretamente. 
     * Se o modelo de instrução original não for derivado de uma entrada externa, a injeção de SQL não poderá ocor */



?>
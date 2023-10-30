<?php 

    // testando json

    // função json_decode
    $json_str = '{"nome": "J", "idade": 32, "sexo": "M"}';
    $obj = json_decode($json_str);
    // json_decode recebe como entrada uma strig codificada no formato JSON
    // json_decode tranforma o JSON em um objeto php

    var_dump($json_str);
    echo "<br>";
    var_dump($obj);
    echo "<br>";
    echo "nome: $obj->nome <br>";
    echo "idade: $obj->idade <br>";
    echo "sexo: $obj->sexo <br>";

    echo "<hr>";
    // JSON com múltiplos dados

    // string json com 3 elementos
    $json_mul_str = '{"pessoas": '. 
        '[{"nome": "João", "idade": 18, "sexo": "M"}, ' .
        ' {"nome": "Lucas", "idade": 19, "sexo": "M"}, ' .
        ' {"nome": "Luan", "idade": 20, "sexo": "M"} ' . 
        ']}'; 

    $objetoJson = json_decode($json_mul_str);

    $galera = $objetoJson->pessoas;
    echo "<pre>";
    var_dump($json_mul_str);
    echo "\$json_mul_str<br>";
    var_dump($objetoJson);
    echo "\$objetoJson <br>";
    var_dump($galera);
    echo "\$galera<br>";
    echo"</pre>";
    foreach ($galera as $g) {
        echo "nome: $g->nome - idade: $g->idade - sexo: $g->sexo -";
    }
    echo "<hr>";
    // em casos de campos opcionais
    $turma = '{"alunos": '. 
        '[{"nome": "João", "idade": 18, "sexo": "M", "cursos": ["PHP", "MySQL"]}, ' .
        ' {"nome": "Lucas", "idade": 19, "sexo": "M"}, ' .
        ' {"nome": "Luan", "idade": 20, "sexo": "M"} ' . 
        ']}'; 

    $objeto = json_decode($turma);

    $_alunos = $objeto->alunos;
    foreach ($_alunos as $aluno) {
        echo "nome: $aluno->nome - idade: $aluno->idade - sexo: $aluno->sexo <br>";
        if (property_exists($aluno, "cursos")) {
            $curso = $aluno->cursos;
            echo "cursos: <br>";
            foreach ($curso as $c) {echo "- $c<br>";}
        }
    }
    echo "<hr>";
    // property_exists() verifica se um atributo de um objeto existe ou não.
    // property_exists() recebe dois argumentos, o primeiro para o objeto a verificar, o segundo, o atributo para ver se existe 

    //json_decode possui um segundo paramêtro boolean para transformar o json em um array associativo
    
    $json = '{"nome": "Juan", "idade": 22, "sexo": "M"}';
    // com false
    $_objeto = json_decode($json, false); // por padrão é false
    var_dump($_objeto); // é um objeto

    echo "<br>";

    // com true
    $array = json_decode($json, true);
    var_dump($array); // é um array


    echo "<hr>";
    // função json_encode
    // como o nome indica, faz o inverso de json_decode, transforma um objeto php em JSON

    // Exemplo:

    $idades = array ("João" => 18, "Lucas" => 19, "Luan" =>20);

    // covertendo o array idades no formato json;
    $_json = json_encode($idades);

    echo "$_json";
    var_dump($_json);


    // Tratamento de erros, função json_last_error

    /** constantes pré-definidas
     * 0 = JSON_ERROR_NONE: nenhum erro ocorreu;
     * 1 = JSON_ERROR_DEPTH: a profundidade máxima de aninhamento de uma string JSON foi excedida (esse valor máximo é 512);
     * 2 = JSON_ERROR_STATE_MISMATCH: erro de underflow ou outro tipo de estado inválido;
     * 3 = JSON_ERROR_CTRL_CHAR: foi encontrado um caractere de controle no corpo da string JSON;
     * 4 = JSON_ERROR_SYNTAX: erro de sintaxe;
     * 5 = JSON_ERROR_UTF8: erro na codificação UTF-8 da string JSON;
     */
    echo "<hr>";
    $json_exemplo = '{"nome":"Juan", "idade":17, "sexo": M}';
    $_obj_json = json_decode($json_exemplo);
    // verifica se houve um erro
    if (json_last_error() == 0) {
        echo "Não houve erro.";
    } else {
        echo "Erro!";
        switch (json_last_error()) {
            case JSON_ERROR_DEPTH:
                echo "erro de profundidade máxima";
                break;
            case JSON_ERROR_STATE_MISMATCH:
                echo "state mismatch";
                break;
            case JSON_ERROR_CTRL_CHAR:
                echo "Caracter de controle encontrado";
                break;
            case JSON_ERROR_SYNTAX:
                echo "Erro de sintexe";
                break;
            case JSON_ERROR_UTF8:
                echo "Erro na codificação UTF-8";
                break;
                default:
                echo "Erro deconhecido";
            break;
        }
    }

?>
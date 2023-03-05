<?php 

    // testando json
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

?>
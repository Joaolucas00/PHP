<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <pre>
    <?php 
        //Utilizando array()
        $exemplo_array = array(
            0 => 'valor0',
            "v1" => 'valor1',
            2 => 'valor2',
            'Três' => "<strong>valor3</strong>",
        );
        var_dump($exemplo_array);
        // Imprime: array(3) { [0]=> string(6) "valor0" [1]=> string(6) "valor1" [2]=> string(6) "valor2" }
        echo "<br>";
        // Utilizando a sintaxe curta
        $outro_exempro_array = [
            "nome" => "João",
            "idade" => 18,
        ];
        var_dump($outro_exempro_array);

        /** Informações úteis
         * strings contendo quaisquer ints válidos, serão convertidos para o tipo int. Por exemplo, a chave"8" será, na verdade, armazenada como 8. Entretanto, "08" não será convertido, por não ser um inteiro decimal válido.
         * floats também são convertidos para ints, isso significa que a parte fracionária será removida. Por exemplo, a chave 8.7 será na verdade armazenada como 8.
         * bools são convertidos para ints, igualmente, por exemplo, a chave true, será na verdade armazenada como 1 e a chave false como 0.
         * null será convertido para uma string vazia, por exemplo, a chave null na verdade será armazenada como "".       
         * arrays e objects não podem ser usados como chaves. Fazer isso resultará em um aviso: Illegal offset type.  
         */
        echo "<br>";

        $vetor = array( //É possível especificar a chave somente para alguns elementos e omití-las para outros:
                    '1', 
                    '2',
            6 => 3, 
                    4
        ); // a chave após a chave 6 irá ser 7, pois a última chave inteira antes dele foi 6
        $matriz = array(
            "pessoa01" => array(
                "nome" => "João",
                "idade" => 18,
            ),
            "pessoa02" => array(
                "nome" => "Lucas",
                "idade" => 19,
            )
        );
        echo "<hr>";
        var_dump($matriz);
        echo "<br>";
        echo "<hr>";

        var_dump($vetor);
        var_dump($vetor[6]);
        var_dump($exemplo_array["v1"]);
        var_dump($matriz["pessoa01"]["nome"]);
        var_dump($matriz["pessoa02"]);
        var_dump($matriz["pessoa02"]["idade"]);
        $matriz["pessoa01"]["nome"] = "L";
        var_dump($matriz["pessoa01"]["nome"]);
        $vetor02 = array(1 => 5, 1, 11 => 2);
        $vetor02[] = 3; // Adicionando um elemento no final do vetor
        var_dump($vetor02);
        unset($vetor02[11]); // Isto remove um elemento do array
        var_dump($vetor02);
        unset($vetor02); // E isto apaga todo o array
        echo "<hr>";


        $arr = array(1, 2, 3, 4, 5);
        print_r($arr);

        foreach ($arr as $i => $value) { // apagando os itens, mas o array ainda existe.
            unset($arr[$i]);
        }
        print_r($arr);

        $arr[] = 6; // adicionando um item, a chave vai ser 5, em vez de 0
        print_r($arr);


        // Reindexando:
        $arr = array_values($arr);
        $arr[] = 7;
        print_r($arr);
        echo "<hr>";


        //Arrays podem ser desconstruídos utilizando [] (a partir do PHP 7.1.0) ou list(). 
        //Esses constructos podem ser utilizados para desconstruir o array em variáveis distintas.
        // Exemplo:
        $frutas = ['Maça', 'Laranja', 'Uva'];
        [$maca, $laranj, $uv] = $frutas;
        echo $maca;
        echo $laranj;
        echo $uv;

        $vet = ['a' => 1, 'b' => 2, 'c' => 3];
        ['c' => $tres] = $vet;
        echo $tres;
        echo "<br>";

        // Algo bem útil: Desconstrução de arrays podem ser utilizados para trocar duas variáveis.
        // Exemplo: 
        $n1 = 1;
        $n2 = 2;

        [$n2, $n1] = [$n1, $n2]; // trocando os valores
        echo $n1; // Imprime: 2
        echo $n2; // Imprime: 1
        echo "<hr>";
        // Espalhando arrays dentro de arrays
        $vet1 = [1, 2, 3];
        $vet2 = [...$vet1];
        $vet3 = [0, ...$vet2];
        print_r($vet3);

        // dá pra usar cunções que retornam arrays também
        function funcVet() {
            return ['1', '2'];
        }
        $vet4 = [...funcVet(), 'c' => 'd'];
        print_r($vet4);
    ?>   
    </pre> 
</body>
</html>
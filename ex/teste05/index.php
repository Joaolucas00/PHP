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

    ?>   
    </pre> 
</body>
</html>
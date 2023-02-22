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
    ?>   
    </pre> 
</body>
</html>
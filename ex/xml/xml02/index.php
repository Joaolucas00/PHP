<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML</title>
</head>
<body>
    <?php     
    // A função PHP simplexml_load_file() é usada para ler dados XML de um arquivo.

    $xml = simplexml_load_file("dados.xml");

    echo "<pre>";
    print_r($xml);
    echo "</pre>";

    // pegando atributo do xml com attributes()
    foreach ($xml->pessoa[1]->attributes() as $a => $b) {
        echo "$a = $b";
    }

    echo $xml->pessoa[0]->nome;

    ?>
</body>
</html>
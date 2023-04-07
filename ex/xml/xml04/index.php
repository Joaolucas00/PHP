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
    
    //  Obtendo valores de nó de elementos específicos
    $xml = simplexml_load_file("livros.xml");

    echo $xml->book[0]->title . "<br>";
    echo $xml->book[3] ->title . "<br>";

    echo "<hr>";
    // Obtendo valores de nó - Loop

    // $xml->children(): encontra filhos de determinado nó
    foreach ($xml->children() as $livros) { 
        echo $livros->title . ", ";
        echo $livros->author . ", ";
        echo $livros->year . ", ";
        echo $livros->price . "<br>";
    }
    
    // Obtendo valores de atributo de maneira mais fácil

    echo $xml->book[0]['category'] . "<br>";
    echo $xml->book[1]->title['lang'];

    echo "<hr>";

    // Obtendo valores de atributo - Loop

    foreach ($xml->children() as $livros) {
        echo "Categoria:  " . $livros['category'];
        echo "<br>"; 
        echo "Idioma:  " . $livros->title['lang'];
        echo "<br>";
    }


    ?>
</body>
</html>
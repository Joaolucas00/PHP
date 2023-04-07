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
        // mostrando dados
        $xml = simplexml_load_file("dados.xml");
        echo $xml->to . "<br>";
        echo $xml->from ."<br>";
        echo $xml->heading . "<br>";
        echo $xml->body . "<br>"
    
    
    ?>
</body>
</html>
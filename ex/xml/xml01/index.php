<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML com PHP</title>
</head>
<body>
    <?php 
        $xmlDados = 
        "<?xml version='1.0' encoding='UTF-8'?>
        <pessoa>
            <nome>João</nome>
            <idade>18</idade>
        </pessoa>
        ";

        // A função PHP simplexml_load_string() é usada para ler dados XML de uma string.
        $xml = simplexml_load_string($xmlDados);

        print_r($xml);

    ?>
</body>
</html>
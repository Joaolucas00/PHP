<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoloading Classes PHP</title>
</head>
<body>
    <?php 
        // sintaxe spl_autoload_register(function ($nome_classe) { ..code });
        spl_autoload_register(function ($nome_classe) {
            include $nome_classe . '.php';
        });
    
    ?>
</body>
</html>
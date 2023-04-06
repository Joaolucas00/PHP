<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $q = "El";
    $a = ["Eva", "Joao", "Eliza", "Eliona"];
    $len = strlen($q);
    $hint = "";
    foreach ($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint == "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        } else {
            var_dump($name);
        }
    }

    var_dump($hint);
    var_dump(substr("Eliona", 0, 2)); // El
    var_dump(stristr("El", "El")); // var_dump("El" == true) output true
    
    echo "<hr>";
    $link = "https://www.w3schools.com/php/php_ajax_php.asp";
    echo "<a href=\"$link\">w3schools</a>";
    echo "<hr>";
    var_dump($_SERVER['REQUEST_METHOD']);
    ?>
    <form action="action.php" method="post">
        <label for="inome">Nome: </label>
        <input type="text" name="nome" id="inome">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
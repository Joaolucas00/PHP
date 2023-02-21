<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos PHP</title>
</head>
<body>
    <h1>Testando Tipos Primitivos</h1>
    <?php 
    $hexad = 0x1A;
    $byte = 0b1011;
    $num = (int) 3e2; //coerção
    echo "O valor da variável é $hexad = 0x1a";
    echo "<br>O valor da variável é $byte = 0b1011";
    echo "<br>0x = hexadecimal, 0b = binário, 0 = Octal";
    echo "<br>var_dump() para mostrar as informações da variável<br>";
    
    var_dump($num);

    echo "<br> Tem como forçar uma variável string a ser inteira utilizando coerção <br>";

    $n = (int) "950";
    var_dump($n);

    echo "<br>Testando vetor e objeto<br>";
    $vetor = [6, 2, "olá"];
    var_dump($vetor);

    class Pessoa {
        private string $nome;
    }

    $p = new Pessoa;
    var_dump($p);
    ?>
</body>
</html>
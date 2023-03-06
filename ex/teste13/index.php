<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções PHP</title>
</head>
<body>
    <?php 
        // função dentro de função
    function funcao () {
        function outra_funcao() {
            echo "outra_funcao não existe até que funcao seja chamada";
        }    
    }

    
    // nãp pode chamar outra_funcao ainda porque não está definida
    funcao();

    // agora podemos

    outra_funcao();

    // função recursiva

    function funcao_recursiva ($num) {
        if ($num <= 20) {
            echo "$num <br>";
            funcao_recursiva($num + 1);
        }
    }

    funcao_recursiva(2);

    // pegando vários argumentos

    function pega_varios_argumentos (
        $primeiro,
        $segundo,
        $outro_argumento,
        $parametro_com_default = 5,
        $terceiro = 'argumento padrão', // antes do PHP 8.0.0, não era permitido vírgula no final
    )
    {
        // code...
    }

    // passando por refêrencia

    // Por padrão, argumentos de função são passados por valor (de forma que se você mudar o valor do parâmetro dentro da função, ele não é alterado fora da função)
    
    function adicionando_alguma_coisa(&$string) 
    {
        $string .= "concatenada com isso";
    }

    $str = "Isto é uma string, ";
    adicionando_alguma_coisa($str);
    echo "$str";

    // Uma função pode definir valores padrão para argumentos usando sintaxe similar a atribuição de uma variável
    echo "<br>";
    function cor_camisa($cor = "azul")
    {
        return "Esta camisa é da cor $cor";
    }

    echo cor_camisa() . "<br>"; // mostra o valor padrão
    echo cor_camisa(null) . "<br>"; // null não atribui o valor padrão
    echo cor_camisa("Rosa") . "<br>"; // muda o valor padrão para "Rosa"

    
    // objetos como valores padrão

    //classes

    class CafeteiraPadrao {
        public function prepararCafe() {
            return "Fazendo o café";
        }
    }

    class CafeteiraMelhor {
        public function prepararCafe() {
            return "Preparando um café bem quentinho";
        }
    }

    // código principal

    function fazerCafe ($cafeteira = new CafeteiraPadrao) {
        return $cafeteira->prepararCafe();
    }

    echo fazerCafe() . "<br>"; // por padrão vai ser a CafeteiraPadrao
    echo fazerCafe(new CafeteiraMelhor); // alterando para CafeteiraMelhor


    // é bom colocar argumentos padrões no último argumento

    function fazeriogurte($recipiente = "tigela", $sabor)
    {
        return "Fazendo um(a) $recipiente de iogurte de $sabor.\n";
    }
    
    //echo fazeriogurte("framboesa"); // "framboesa" é $recipiente, não $sabor, vai gerar um erro

    // desse jeito é melhor 
    function fazeriogurte_2($sabor, $recipiente = "tigela")
    {
        return "Fazendo um(a) $recipiente de iogurte de $sabor.\n";
    }
    
    echo fazeriogurte_2("framboesa"); // "framboesa" é $sabor


    // podemos pular argumento também

    function exemplo ($var1 = 1, $var2 = 2, $var3 = 3, $var4 =4) {
        return "$var1 . $var2 . $var3 . $var4";
    }
    echo exemplo (var3: 4);



    echo "<br>";
    // utilizando ... para acessar argumentos variáveis
    //Lista de argumentos que contém o token ... token para indicam que a função aceita uma quantidade variável de argumentos. Os argumentos serão passados na variável como um array:
    function somar(...$numeros)
    {
        $soma = 0;
        foreach ($numeros as $num) {
            $soma += $num;
        }
        return $soma;
    }

    echo somar(1, 2, 3, 4);

    //Utilizando ... para fornecer argumentos

    function adicionar ($a, $b) {
        return $a + $b;
    }
    echo adicionar(...[1, 2]);

    $vetor = [1, 2];
    echo adicionar(...$vetor);
    echo "<hr>";

    // Funções variáveis


    function funcao_exemplo() {
        echo "Chamou funcao_exemplo <br>";
    }

    function f($arg = '') {
        echo "Chamou f(); com argumento '$arg'. <br>";
    }

    // Essa é uma função wrapper para echo()
    function wrapper_func($string) {
        echo $string;
    }

    $func = 'funcao_exemplo';
    $func(); // chama funcao_exemplo

    $func = 'f';
    $func('teste'); // chama f()

    $func = 'wrapper_func';
    $func('teste'); // chama wrapper_func

?>

</body>
</html>
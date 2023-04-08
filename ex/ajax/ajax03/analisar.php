<?php 
    // Verifica qual método http é usado
    //$_SERVER['REQUEST_METHOD'] ->  Contém o método de request utilizando para acessar a página. Geralmente 'GET', 'HEAD', 'POST' ou 'PUT'.
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $a = [
        "Ana", 
        "Anita", 
        "Angela", 
        "Bruno", 
        "Bernado",
        "Breno",
        "Cinderella",
        "Diana",
        "Eva",
    ];
    $a[] = "Fiona";
    $a[] = "Gunda";
    $a[] = "Hege";
    $a[] = "Inga";
    $a[] = "Johanna";
    $a[] = "Kitty";
    $a[] = "Linda";
    $a[] = "Nina";
    $a[] = "Ophelia";
    $a[] = "Petunia";
    $a[] = "Amanda";
    $a[] = "Raquel";
    $a[] = "Cindy";
    $a[] = "Doris";
    $a[] = "Eve";
    $a[] = "Evita";
    $a[] = "Sunniva";
    $a[] = "Tove";
    $a[] = "Unni";
    $a[] = "Violet";
    $a[] = "Liza";
    $a[] = "Elizabeth";
    $a[] = "Ellen";
    $a[] = "Wenche";
    $a[] = "Vicky";

    $q = $_REQUEST['q'];

    $sugestao = "";

    if ($q !== "") {
        $q = strtolower($q);
        $tamanho = strlen($q);
        foreach ($a as $nome) {
            if (stristr($q, substr($nome, 0, $tamanho))) {
                if ($sugestao === "") {
                    $sugestao = $nome;
                } else {
                    $sugestao .= ", $nome";
                }
            }
        }
    }
}

    echo $sugestao === "" ? "sem sugestão" : $sugestao; // a $sugestao vai no response e responseText assim também como o resto do documento abaixo se tiver algo

    // O xhr do js após ser enviado, ele vai pegar o documento inteiro, e também o html abaixo
?>


    <h1>Funcionamento do AJAX</h1>
    <img src="ajax.gif" alt="Imagem explicativa do funcionamento do ajax">

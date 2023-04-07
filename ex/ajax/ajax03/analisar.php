<?php 
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
                    $sugestao = "nome";
                } else {
                    $sugestao .= ", $nome";
                }
            }
        }
    }

    echo $sugestao === "" ? "sem sugestão" : $sugestao;

?>
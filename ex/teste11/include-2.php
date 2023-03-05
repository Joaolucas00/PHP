<?php 
    //include inclui e avalia o arquivo informado.

    /** 
     * Quando o arquivo é incluído, o código herda todo o escopo de variáveis.
     * Toda variável disponível no aquivo que foi incliu estará também
     * no arquivo incluído.
     * todas as funções e classes definidas no arquivo incluído estarão no escopo global.
    */ 
    
    include 'variaveis.php';

    echo "cor é $cor, n1 é $n1";


?>
<?php 
    //include inclui e avalia o arquivo informado.

    /** 
     * Quando o arquivo é incluído, o código herda todo o escopo de variáveis.
     * Toda variável disponível no aquivo que foi incliu estará também
     * no arquivo incluído.
     * todas as funções e classes definidas no arquivo incluído estarão no escopo global.
    */ 

    function exeplo() {
        global $cor;

        include 'variaveis.php'; // Se a inclusão ocorrer dentro de uma função todo o código contido no arquivo incluído irá se comportar como se tivesse sido definido dentro da função
        //Portanto seguirá o escopo de variáveis da função

        echo "A cor é $cor, n1 é $n1";

    }

    exeplo();
    echo "A cor é $cor, n1 é $n1";

?>
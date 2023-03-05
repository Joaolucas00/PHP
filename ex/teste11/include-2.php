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

    // include retorna falso ao falhar e emite um aviso. Retorna 1 se for bem sucedida

    // não funciona, não precisa de parênteses, é bom tomar cuidado na hora de comparar valores de retorno
    if (include('variaveis.php') == true) {
        echo "ok";
    }

    // funciona, sem parênteses no include
    if ((include 'variaveis.php') == true) {
        echo "Ok";
    }

?>
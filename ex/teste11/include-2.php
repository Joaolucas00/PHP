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


    // include_once

    /** 
     * como o nome sugere, o arquivo será incluído somente uma vez.
     * O include_once pode ser utilizado em casos em que o mesmo arquivo pode ser incluído e valiado mais de uma vez durante uma execução de um script em particular,
     *  neste caso, ajudará a evitar problemas como redefinição de funções, reatribuição de valores de variáveis, e etc.
     */
?>
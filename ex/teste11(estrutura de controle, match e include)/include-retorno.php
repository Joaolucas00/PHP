<?php 

    $exemplo = include 'return.php';
    var_dump($exemplo); // string (12) "Olá, Mundo!"

    $outro_exemplo = include 'sem-retorno.php';
    var_dump($outro_exemplo); // int (1)



?>
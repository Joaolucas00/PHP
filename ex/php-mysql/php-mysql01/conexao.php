<?php 
        $hostname = "localhost";
        $db = "cadastro";
        $user = "root";
        $senha = '';
    
        $mysqli = new mysqli($hostname, $user, $senha, $db);
        if ($mysqli->connect_errno) {
            echo "Falha ao conectar: ( " . $mysqli->connect_errno . ") ";
        }
        echo "<h1>Olá..</h1>";
        
        

?>
<?php 
        // conectando o php com mysql
        $hostname = "localhost";
        $db = "cadastro";
        $user = "root";
        $senha = '';
    
        $mysqli = new mysqli($hostname, $user, $senha, $db);

        
        // verificando se está realmente conectado
        if ($mysqli->connect_errno) {
            echo "Falha ao conectar: ( " . $mysqli->connect_errno . ") ";
        }
        echo "<h1>Olá..</h1>";

        $sql = "SELECT * FROM gafanhotos";


        // Executa uma consulta no banco de dados
        // mysqli::query() só pode executar uma instrução SQL
        $resultado = $mysqli->query($sql);


        // mostrando um select * from gafanhotos
        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) { //Obtem uma linha do conjunto de resultados como uma matriz associativa
                echo " - curso preferido:  " . $row["curso_preferido"] . " - id :" . $row["id"] . " - Nome: " . $row["nome"] . "- profissao: " . $row["profissao"] . " - nascimento: " . $row["nascimento"] . "- sexo: " . $row["sexo"] . "- peso: " . $row["peso"] . "- altura: " . $row["altura"] . "- nacionalidade: " . $row["nacionalidade"] . "<br>";
            }
        }
        $resultado->close(); // Fecha uma conexão de banco de dados aberta anterio

        
        

?>
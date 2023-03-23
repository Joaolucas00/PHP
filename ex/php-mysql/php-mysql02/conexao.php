<?php 
    $hostname =  "localhost";
    $username = "root";
    $db = "cadastro";
    $senha = '';

    // criando uma conexão
    $conn = new mysqli($hostname, $username, $senha, $db);

    // Verificando se es´ta conectado
    if ($conn->connect_errno) {
        die ("Erro ao conectar: " . $conn->errno);
    }

    /** com PDO
     *  $pdo = new PDO("mysql:host=$hostname;dbname=$db", $username, $senha);
     *  
     *  A conexão será fechada automaticamente quando o script terminar. Para fechar a conexão antes, use:
     * 
     *  mysqli: $conn->close()
     * 
     *  PDO: $pdo = null;
     */

     $sql_id = "SELECT id FROM gafanhotos";
     $resultado = $conn->query($sql_id);
     $id_atualizado = $resultado->num_rows;
     $id_atualizado += 1;

     // inserindo dados

     $curso_pref = (int) $_GET["curso_pref"];
     $nome = $_POST["nome"] ?? null;
     $nasc = $_POST["nasc"] ?? null;
     $profissao = $_POST["profissao"] ?? null;
     $sexo = $_POST["sexo"] ?? null;
     $peso = (float) $_POST["peso"] ?? null;
     $altura = (float) $_POST["altura"] ?? null;
     $nacio = $_POST["nacio"] ?? null;

     $sql = "INSERT INTO `gafanhotos` (`curso_preferido`, `id`, `nome`, `profissao`, `nascimento`, `sexo`, `peso`, `altura`, `nacionalidade`) VALUES ('$curso_pref', '$id_atualizado', '$nome', '$profissao', '$nasc', '$sexo', '$peso', '$altura', '$nacio')";

    if ($nome )) {![]
    $conn->query($sql);
    }
    /**
     * INSERT INTO `gafanhotos` (`curso_preferido`, `id`, `nome`, `profissao`, `nascimento`, `sexo`, `peso`, `altura`, `nacionalidade`) VALUES ('18', NULL, 'João', 'ddd', '2017-03-16', 'M', '1.42', '1.70', 'Brasil');
     * 
     * 
     */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML</title>
</head>
<body>
    <?php 
        /**  O Analisador XML DOM
         * O analisador DOM é um analisador baseado em árvore.
         */

         /**  O DOM vê o XML acima como uma estrutura de árvore: 
          * Level 1: XML Document
          * Level 2: Root element: <from>
          * Level 3: Text element: "Jani"
         */


         // Carregar e gerar XML
        
         $xml = new DOMDocument();
         $xml->load("dados.xml"); // Carregar XML de um arquivo

         print $xml->saveXML(); // Despeja a árvore XML interna de volta em uma string

        //  O exemplo acima cria um DOMDocument-Object e carrega o XML de "dados.xml" nele.
        //  Em seguida, a função saveXML() coloca o documento XML interno em uma string, para que possamos produzi-lo.
    

        // Looping pelo XML

        $xmlDoc = new DOMDocument();
        $xmlDoc->load("dados.xml");

        $x = $xmlDoc->documentElement; // Representa um documento HTML ou XML inteiro; serve como a raiz da árvore de documentos.
    
    ?>
</body>
</html>
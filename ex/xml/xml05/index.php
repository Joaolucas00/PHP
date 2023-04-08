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
        $parser = xml_parser_create(); // Criar um analisador XML
        // xml_parser_create() cria um novo analisador XML e retorna uma instância XMLParser para ser usada por outras funções XML.
    
        var_dump($parser);

        function start($parser, $element_name, $element_attrs) {
            switch ($element_name) {
                case "NOTE":
                    echo " -- Note --<br>";
                    break;
                case "TO":
                    echo "To: ";
                    break;
                case "FROM":
                    echo "From: ";
                    break;
                case "HEADING":
                    echo "Heading: ";
                    break;
                case "BODY":
                    echo "Message: ";
            }
        }

        function char ($parser, $data) {
            echo $data;
        }

        // Configurara manipuladores de elemento inicial e final
        xml_set_element_handler($parser, "start", "stop");

        //  Define a função do manipulador de dados de caractere para o analisador do analisador XML.
        xml_set_character_data_handler($parser, "char");





        /** Explicado
         * 1 - Inicialize o analisador XML com a função xml_parser_create()
         * 
         * 2 - Crie funções para usar com os diferentes manipuladores de eventos
         * 3 - Adicione a função xml_set_element_handler() para especificar qual função será executada quando o analisador encontrar as tags de abertura e fechamento
         * 4 - Adicione a função xml_set_character_data_handler() para especificar qual função será executada quando o analisador encontrar dados de caracteres
         * 5 - Analise o arquivo "note.xml" com a função xml_parse()
         * 6 - Em caso de erro, adicione a função xml_error_string() para converter um erro XML em uma descrição textual
         * 7 - Chame a função xml_parser_free() para liberar a memória alocada com a função xml_parser_cre
         * 
         * 
         */

    ?>
</body>
</html>
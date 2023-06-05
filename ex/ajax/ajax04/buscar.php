<?php 
    $q = $_REQUEST["q"];

    $xml = simplexml_load_file("links.xml");
    
    if (strlen($q) > 1) {
        $reponse = "";
        foreach ($xml->children() as $link) {
            if (stristr($link->titulo, $q)) {
                if ($reponse == "") {
                    $reponse = "<a href='" . $link->url . "' target='_blank'>" . $link->titulo . "</a>";
                } else {
                    $reponse .= "<br> <a href='" . $link->url . "' target='_blank'>" . $link->titulo . "</a>";
                }
            }
        }
    }

    if (!isset($reponse)) {
        echo "Sem sugestão";
    } else if (isset($reponse)) {
        echo $reponse;
    }
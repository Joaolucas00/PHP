<?php 
    $q = $_REQUEST["q"];

    $xml = new DOMDocument();
    $xml->load("links.xml");

    $x = $xml->getElementById('link');
    var_dump($x)



?>
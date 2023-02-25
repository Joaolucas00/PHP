<?php
class myClass {
    public $var;
}

function incrementVar($a) {
    $a++;
}
function incrementVarRef(&$a) { // not deprecated
    $a++;
}
function incrementObj($obj) {
    $obj->var++;
}

$c = new myClass();
$c->var = 1;

$a = 1; incrementVar($a);    echo "test1 $a\n";
//$a = 1; incrementVar(&$a);   echo "test2 $a\n";  deprecated
$a = 1; incrementVarRef($a); echo "test3 $a\n";
        incrementObj($c);    echo "test4 $c->var\n";// notice that objects are
                                                    // always passed by reference
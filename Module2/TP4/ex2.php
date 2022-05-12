<?php


function ordonnerDesc(&$a, &$b){
    if($a < $b){
        $t = $a;
        $a = $b;
        $b = $t;
    }
}


$var1 = 1;
$var2 = 9;

ordonnerDesc($var1, $var2);
echo $var1 . ' est supérieur à ' . $var2;



<?php

$p1 = ['Norbert', 'DURANT'];
$p2 = ['melanie', 'DUPONT'];
$p3 = ['Juste', 'LE BLANC'];

$personnes = [$p1, $p2, $p3];

echo '<pre>';
foreach ($personnes as $valeur){
    foreach ($valeur as $v){
        printf("%-20s", $v);
    }
    echo '<br>';
}
echo '</pre>';
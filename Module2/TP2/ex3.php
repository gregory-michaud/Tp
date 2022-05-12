<?php

require './ex1.php';

echo '<ul>';
foreach ($personnes as $cle=>$valeur){
    echo '<li>Element ' . $cle . '<ul>';
    foreach ($valeur as $c => $v){
        echo '<li>élément ' . $c . ' : ' . $v . '</li>';
    }
    echo '</ul></li>';
}
echo '</ul>';

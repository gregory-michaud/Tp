<?php


function nbEssai($cible){

    $nbTentative = 0;

    do{
        $nbTentative++;
    }while(rand(0, 999) != $cible);

    return $nbTentative;
}

echo nbEssai(256);

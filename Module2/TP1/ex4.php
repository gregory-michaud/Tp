<?php
$X =  "PHP7";
$A = &$X ;
$Y  = ' 7 eme version de PHP';
//settype($Y, "integer");
$Z = $Y * 10;
$X = $Y * $Y;

var_dump($Z);
var_dump($X);
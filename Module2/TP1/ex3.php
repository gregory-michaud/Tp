<?php
$a = "0";
var_dump($a OR true);
$b =  "wistiti";
$c = FALSE ;
$d = ($a OR $b);// true
$e = ($a AND $c);//false
$f = ($a XOR $b);//true

var_dump($d);
var_dump($e);
var_dump($f);
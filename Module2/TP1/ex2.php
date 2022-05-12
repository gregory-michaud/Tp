<?php

$x = " PostgreSQL";
$y = " MySQL";
$z  = &$x ;
$x  = "PHP 5";
$y = &$x;

var_dump($x);
var_dump($y);
var_dump($z);

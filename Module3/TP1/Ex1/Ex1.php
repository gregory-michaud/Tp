<?php

require_once 'Ville.class.php';

$rennes = new Ville();
$rennes->setNom('Rennes');
$rennes->setDepartement(35);

echo $rennes;
echo '<br>';

$nantes = new Ville();
$nantes->setNom('Nantes');
$nantes->setDepartement(44);
echo $nantes;
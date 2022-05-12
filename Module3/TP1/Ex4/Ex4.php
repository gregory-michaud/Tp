<?php

require_once 'Ville.class.php';

$nantes = new Ville('Nantes', 44);

$rennes = new Ville('Rennes', 35);

$marseille = new Ville('Marseille', 13);

echo 'La ville avec le nom le plus long est : ' . Ville::getNomLePlusLong();
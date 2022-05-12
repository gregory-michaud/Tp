<?php

$maintenant = time();
$naissance = mktime(0, 0, 0, 2, 19, 1984);
$age = $maintenant - $naissance;

echo "Vous avez vécu $age secondes.<br>";

$dateNaissance = '19-02-1984 18:30';
$dateAujourdhui = date('d-m-Y H:i:s');
$age2 = date_diff(date_create($dateNaissance), date_create($dateAujourdhui));
echo "votre age est $age2->y  ans, $age2->m mois, $age2->d jours ...";



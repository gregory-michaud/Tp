<?php
require_once 'connexion/connexion.php';

$query = 'SELECT id_modele, marque, modele, carburant FROM modeles ORDER BY marque';
$prep = $pdo->prepare($query);
$prep->execute();

$modeles = $prep->fetchAll();

var_dump($modeles);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <title>Modèles</title>
</head>
<body>
<table>
    <tr>
        <th>identifiant</th>
        <th>marque</th>
        <th>modèle</th>
        <th>carburant</th>
    </tr>

    <?php foreach ($modeles as $ligne) :?>
        <tr>
            <td><?= $ligne['id_modele']?></td>
            <td><?= $ligne['marque']?></td>
            <td><?= $ligne['modele']?></td>
            <td><?= $ligne['carburant']?></td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>

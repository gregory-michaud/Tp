<?php

$carburants = ['Essence', 'Diesel', 'GPL', 'Electrique'];

if(isset($_POST['ajouter'])){

    $identifiant = filter_input(INPUT_POST, 'identifiant', FILTER_SANITIZE_SPECIAL_CHARS);
    $marque = filter_input(INPUT_POST, 'marque', FILTER_SANITIZE_SPECIAL_CHARS);
    $modele = filter_input(INPUT_POST, 'modele', FILTER_SANITIZE_SPECIAL_CHARS);
    $carburant = filter_input(INPUT_POST, 'carburant', FILTER_SANITIZE_SPECIAL_CHARS);

    //gestion erreur

    require_once 'connexion/connexion.php';
    $query = 'INSERT INTO modeles (id_modele, marque, modele, carburant) VALUES (:id_modele, :marque, :modele, :carburant)';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':id_modele', $identifiant);
    $prep->bindValue(':marque', $marque);
    $prep->bindValue(':modele', $modele);
    $prep->bindValue(':carburant', $carburant);

    $prep->execute();

}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <title>Nouveau modèle</title>
</head>
<body>

<form method="post" action="#">
    <fieldset>
        <legend>Ajouter un nouveau modèle</legend>
        <label for="identifiant">Identifiant : </label>
        <input type="text" name="identifiant" value="">

        <br><br>
        <label for="marque">Marque : </label>
        <input type="text" name="marque" value="">

        <br><br>
        <label for="modele">Modèle : </label>
        <input type="text" name="modele" value="">

        <br><br>

        <?php foreach ($carburants as $c) : ?>
            <input id="id<?=$c?>" type="radio" name="carburant" value="<?=$c?>" ><label for="id<?=$c?>"><?=$c?></label><br>
        <?php endforeach; ?>

        <input type="submit" name="ajouter" value="Ajouter"/>
    </fieldset>
</form>

</body>
</html>

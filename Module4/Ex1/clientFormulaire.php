<?php


if(isset($_POST['valider'])){

    $filtre = array(
        'nom' => FILTER_SANITIZE_SPECIAL_CHARS,
        'prenom' => FILTER_SANITIZE_SPECIAL_CHARS,
        'adresse' => FILTER_SANITIZE_SPECIAL_CHARS,
        'cp' => FILTER_VALIDATE_INT,
        'ville' => FILTER_SANITIZE_SPECIAL_CHARS
    );


    $client = filter_input_array(INPUT_POST, $filtre);

    var_dump($client);

    if(!$client['nom']){
        $erreurs['nom'] = 'Le nom est obligatoire';
    }
    if(!$client['prenom']){
        $erreurs['prenom'] = 'Le prenom est obligatoire';
    }

    if(!$client['adresse']){
        $erreurs['adresse'] = 'L\'adresse est obligatoire';
    }

    if(!$client['cp']){
        $erreurs['cp'] = 'Le cp n\'est pas valide';
    }

    if(!$client['ville']){
        $erreurs['ville'] = 'La ville est obligatoire';
    }


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
if(!isset($_POST['valider'])):
?>

<form action="" method="POST">
    <fieldset><legend>Adresse client</legend>
        <label for="idNom">Nom : </label>
        <input id="idNom" required="" type="text" name="nom" placeholder="votre nom..." title="Entrez ici votre nom" maxlength="30"><br>
        <label for="idPrnom">Prénom : </label>
        <input id="idPrnom" required="" type="text" name="prenom" placeholder="votre prénom..." title="Entrez ici votre prénom" maxlength="30"><br>
        <label for="idAdresse">Adresse : </label>
        <input id="idAdresse" required="" type="text" name="adresse" placeholder="le numéro et nom de la rue..." title="Entrez ici votre adresse" maxlength="120"><br>
        <label for="idCp">CP : </label>
        <input id="idCp" required="" type="text" name="cp" placeholder="votre code postal..." title="Entrez ici votre code postal" maxlength="5"><br>
        <label for="idVille">Ville : </label><input id="idVille" required="" type="text" name="ville" placeholder="votre ville..." title="Entrez ici votre ville" maxlength="30"><br>
        <input type="submit" name="valider" value="Envoyer le formulaire"></fieldset>
</form>

<?php
else :
?>


<table>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Adresse</th>
        <th>Cp</th>
        <th>Ville</th>
    </tr>

    <tr>
        <td><?=isset($erreurs['nom'])?$erreurs['nom']:$client['nom']?></td>
        <td><?=isset($erreurs['prenom'])?$erreurs['prenom']:$client['prenom']?></td>
        <td><?=isset($erreurs['adresse'])?$erreurs['adresse']:$client['adresse']?></td>
        <td><?=isset($erreurs['cp'])?$erreurs['cp']:$client['cp']?></td>
        <td><?=isset($erreurs['ville'])?$erreurs['ville']:$client['ville']?></td>
    </tr>


</table>

<?php
endif;
?>


</body>
</html>

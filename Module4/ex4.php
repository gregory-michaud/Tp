<?php

$tauxTVA = '';
if(isset($_POST['calculer'])){

    $prixHT = filter_input(INPUT_POST, 'prixHT', FILTER_VALIDATE_FLOAT);
    $tauxTVA = filter_input(INPUT_POST, 'tauxTVA', FILTER_VALIDATE_FLOAT);

    var_dump($prixHT);
    var_dump($tauxTVA);

    if(!$prixHT){
        $erreurs['prixHT'] = 'Le prix doit être renseigné';
    }

    if(!$tauxTVA){
        $erreurs['tauxTVA'] = 'Le taux de TVA doit être renseigné';
    }



    if(!isset($erreurs)){
        $montantTVA = $prixHT * $tauxTVA / 100;
        $montantTTC = $prixHT * (1 + $tauxTVA / 100);
    }




}



?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Calcul des taxes</title>
</head>
<body>


    <fieldset>
        <legend>Calcul des taxes</legend>
        <form method="post" action="">


        <label for="prixHT">Prix HT : </label>
        <input type="text" step="0.01" name="prixHT" placeholder="Votre prix..." value="<?=isset($prixHT)?$prixHT:'' ?>"> €
            <?php if(isset($erreurs['prixHT'])): ?>
                <div><?=$erreurs['prixHT'] ?> </div>
            <?php endif; ?>
        <br><br>

        <label for="tauxTVA">Taux de TVA : </label>
        <input type="text" step="0.1" name="tauxTVA" placeholder="Votre prix..." value="<?=$tauxTVA ?>"> %
            <?php if(isset($erreurs['tauxTVA'])): ?>
                <div><?=$erreurs['tauxTVA'] ?> </div>
            <?php endif; ?>
        <br><br>
        <input type="submit" name="calculer" value="Calculer"/>
        </form>

        <?php if(isset($montantTVA) && isset($montantTTC)): ?>
            <label for="montantTVA">Montant de la TVA : </label>
            <input type="text" value="<?=$montantTVA ?>" readonly> €
            <br><br>
            <label for="montantTTC">Montant TTC : </label>
            <input type="text" value="<?=$montantTTC ?>" readonly> €
            <br><br>
        <?php endif; ?>
    </fieldset>





</body>
</html>

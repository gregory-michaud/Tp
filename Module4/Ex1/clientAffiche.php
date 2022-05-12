<?php

$valider = htmlspecialchars($_POST['valider']);

if($valider){

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

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

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




</body>
</html>


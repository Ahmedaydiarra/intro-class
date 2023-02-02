<?php
//pour utiliser notre class,il faut l'instancier (ne pas oublier d'importer notre class)

require_once "voiture.php";

//objet = new class()
$voiture = new voiture("blanche", "toyota", "corola");
$voiture2 = new voiture("rouge", "peugeot", "306")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Intro aux classes</h1>


<hr/>
<p><?= $voiture->getCouleur() ?></p>
<p><?= $voiture->getMarque() ?></p>
<p><?= $voiture->getModele() ?></p>

<hr/>
<p><?= $voiture2->getCouleur() ?></p>
<p><?= $voiture2->getMarque() ?></p>
<p><?= $voiture2->getModele() ?></p>

<hr/>

<p><?= $voiture->klaxon() ?></p>
<p><?= $voiture->start() ?></p>

    
</body>
</html>
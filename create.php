<?php

require_once "voiture.php";

$voiture = new voiture("noir","opel","astral");
// var_dump($_POST);
//   exit;
if ($_SERVER["REQUEST_METHOD"] === "POST")
{

  
  //nous allons vouloir modifier notre voiture
  //pour cela, nous allons utiliser nos setters
  $voiture->setCouleur($_POST["couleur"]);
  $voiture->setMarque($_POST["marque"]);
  $voiture->setModele($_POST["modele"]);


  
  var_dump($voiture);

  exit;
//   // var_dump($_POST);
}

// var_dump($_POST);

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
<?php var_dump($voiture->getCouleur(), $voiture->getMarque(), $voiture->getModele())?>
    <h1> Création d'une nouvelle voiture</h1>

    <hr>

    <form  method="post">
    <div style="margin-bottom: 10px">
      <label style="display: block; margin-bottom: 5px" for="couleur">Couleur</label>
      <input type="text" name="couleur" id="couleur">
    </div>

    <div style="margin-bottom: 10px">
      <label style="display: block; margin-bottom: 5px" for="marque">Marque</label>
      <input type="text" name="marque" id="marque">
    </div>

    <div style="margin-bottom: 10px">
      <label style="display: block; margin-bottom: 5px" for="modele">Modele</label>
      <input type="text" name="modele" id="modele">
    </div>

    <button>Envoyer</button>
  </form>

    
</body>
</html>
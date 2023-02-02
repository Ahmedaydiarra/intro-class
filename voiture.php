<?php
class voiture
{
  // une classe peut contenir des propriétés ainsi que des fonctionnalités
  
  // les propriétés sont les variables qui appartiennent à la classe
  
private $couleur ;
private $marque ;
private $modele ;

// par defaut, il existe une methode magique qui s'appelle construct
//cette methode est invoqué au moment ou l'on instancie notre class
public function __construct($color,$brand,$model)
{
  //pour acceder à une propriété/méthode à l'interieur de notre class
  //nous devons utiliser $this
  //$this fait référence à l'instance de notre class
  $this->couleur = $color;
  $this->marque = $brand;
  $this->modele = $model;
}

//Les méthodes sont des fonctions qui se trouve à l'interieur de notre class
public function klaxon()
{
  return "la voiture klaxonne ";
}

public function start()
{
  return "la voiture démarre";
}

//par defaut, nous souhaitons que nos propriétés soit private.
//cependant, nous avons besoin d'y avoir accès, ou bien de les modifier
// pour palier à ce probleme, nous allons créer des méthodes getters et setters

//par convention, nous nommons nos méthodes avec get/set + nom de la propriete
public function getCouleur()
{
  //strtoupper mettre en majuscule en php
  return strtoupper($this->couleur);
}
public function setCouleur($color)
{
  return $this->couleur = $color;
}
public function getMarque()
{
  return $this->marque;
}
public function setMarque($brand)
{
  return $this->marque = $brand;
}
public function getModele()
{
  //point d'exclamation
  return $this->modele ."!!";
}
public function setModele($model)
{
  return $this->modele = $model;
}





}


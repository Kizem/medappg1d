<?php
/*
session_test.php

Page de session test du site. Affichage des differents test et valeurs a rentrer pour effectuer ces tests.
*/
require("Modeles/fonction.php");
require("includes/AccesBase.php");

$erreur="";
$date;
$heure;
$Pseudo;
$Capteur;
if(!empty($_POST)){
	$date=htmlspecialchars($_POST['Date']);
	$heure=htmlspecialchars($_POST['heure']);
	$Pseudo=htmlspecialchars($_POST['Pseudo']);
	$Capteur=htmlspecialchars($_POST['Capteur']);
	$erreur='cetsbon';
	$idCapteur=capteurDisponible($db, $Capteur);
	$idUser=pseudoDisponible($db, $Pseudo);
	if($idUser==TRUE){
		$erreur="Utilisateur inconnu";
			include_once('Vues/Creation_test.vue.php');
	}
	else{
		if($idCapteur==FALSE){
			$erreur="capteur inconnu";
			include_once('Vues/Creation_test.vue.php');
			}
		else{
			//inserer dans la base de donnee maintenant
			$erreur="on connait";
			include_once('Vues/Creation_test.vue.php');
			}
		}
	}
else{
	include_once('Vues/Creation_test.vue.php');
}

?>
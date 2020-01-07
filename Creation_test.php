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
$i = 0;
$idBoitier=$_SESSION['idBoitier'];
if(is_null($idBoitier)){
	echo "Vous ne possedez pas de boitier, contactez votre administrateur";
}
else{
	$ListesCapteurs = $db->query('SELECT * FROM capteur ORDER BY idCapteur DESC');
	if(!empty($_POST)){
		$date=htmlspecialchars($_POST['Date']);
		$heure=htmlspecialchars($_POST['heure']);
		$Pseudo=htmlspecialchars($_POST['Pseudo']);
		$Capteur=htmlspecialchars($_POST['listeDeroulante']);
		$erreur='cetsbon';
		$idCapteur=capteurDisponible($db, $Capteur);
		$idUser=pseudoDisponible($db, $Pseudo);
		if(is_bool($idUser) && $idUser==TRUE){
			$erreur="Utilisateur inconnu";
				include_once('Vues/Creation_test.vue.php');
		}
		else{
			if($idCapteur==FALSE){
				$erreur="capteur inconnu";
				include_once('Vues/Creation_test.vue.php');
				}
			else{
				
				$erreur="on connait";
				$code = genererChaineAleatoire(10);
				echo $code;
				//inserer dans la base de donnee maintenant
				insertTest($db, $date,$code,$idUser, $idBoitier);
				include_once('Vues/Creation_test.vue.php');
				}
			}
		}
	else{
		include_once('Vues/Creation_test.vue.php');
	}
}


?>
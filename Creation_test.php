<?php
/*
session_test.php

Page de session test du site. Affichage des differents test et valeurs a rentrer pour effectuer ces tests.
*/
require_once("Modeles/fonction.php");
require("includes/AccesBase.php");
if(!empty($_SESSION)){
	$erreur="";
	$date;
	$heure;
	$Pseudo;
	$Capteur;
	$listePseudo;
	$i;

	$idBoitier=$_SESSION['idBoitier'];
	if(is_null($idBoitier)){
		echo "Vous ne possedez pas de boitier, contactez votre administrateur";
	}
	else{
		$ListesCapteurs = $db->query("SELECT * FROM capteur where idBoitier='$idBoitier' ORDER BY idCapteur DESC");
		$liste=$db->query('SELECT login FROM utilisateur');
		$liste=$liste->fetchall();
		
		for($i=0;$i<count($liste); $i++ ){
			$listePseudo[$i]=$liste[$i]['login'];
		}
		
		
		if(!empty($_POST)){
			$date=htmlspecialchars($_POST['Date']);
			$heure=htmlspecialchars($_POST['heure']);
			$Pseudo=htmlspecialchars($_POST['Pseudo']);
			$Capteur=htmlspecialchars($_POST['listeDeroulante']);
			$erreur='cetsbon';
			$idCapteur=idCapteur($db, $Capteur, $idBoitier);
			$idUser=pseudoDisponible($db, $Pseudo);

			if(is_bool($idUser) && $idUser==TRUE){
				$erreur="Utilisateur inconnu";
					include_once('Vues/Creation_test.vue.php');
			}
			else{
				/*if($idCapteur==FALSE){
					$erreur="capteur inconnu";
					include_once('Vues/Creation_test.vue.php');
					}
				else{*/
					$erreur="session de test créée";
					$code = genererChaineAleatoire(10);
					//inserer dans la base de donnee maintenant
					
					$ListesCapteurs = $db->query("SELECT * FROM capteur where idCapteur='$Capteur' ORDER BY idCapteur DESC");
					$Type=$ListesCapteurs->fetch();
					
					insertTest($db, $date,$code,$idUser, $idBoitier, $Type['Type']);
					include_once('affichageTest.php');
					
				}
			}
		else{
			include_once('Vues/Creation_test.vue.php');
		}
	}
}


?>
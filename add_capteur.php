<?php

include_once("includes/AccesBase.php");
include_once("Modeles/fonction.php");
if(!empty($_SESSION)){
	$erreur="";
	$i = 0;
	$ListeBoitier = $db->query('SELECT * FROM boitier ORDER BY idBoitier DESC');

	if(!empty($_POST['Type']) AND !empty($_POST['Valeur_init']) AND !empty($_POST['Seuil'])){

		$type_cap = htmlspecialchars($_POST['Type']);
		$val_init = htmlspecialchars($_POST['Valeur_init']);
		$seuil = htmlspecialchars($_POST['Seuil']);
		$boitier = htmlspecialchars($_POST['listeDeroulante']);
		
		/* ajouter ici les contraintes qui seront fournies par le client */
		$TabAllBoitier = $ListeBoitier->fetchall();

		$req = insertCapteur($db, $type_cap, $val_init, $seuil, $TabAllBoitier[(int)$_POST['listeDeroulante']]['idBoitier']);
		$erreur="";

		include('Vues/add_capteur.vue.php');

	}
	else{
		include('Vues/add_capteur.vue.php');
		}
	}


?>

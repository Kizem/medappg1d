<?php

include_once("includes/AccesBase.php");
include_once("Modeles/fonction.php");

$erreur="";

if(!empty($_POST['Type']) AND !empty($_POST['Valeur_init']) AND !empty($_POST['Seuil'])){

	$type_cap = htmlspecialchars($_POST['Type']);
	$val_init = htmlspecialchars($_POST['Valeur_init']);
	$seuil = htmlspecialchars($_POST['Seuil']);

	/* ajouter ici les contraintes qui seront fournies par le client */

	$req = insertCapteur($db, $type_cap, $val_init, $seuil);
	$erreur="";

	include('page_admin.php');

}
else{
	$erreur= "Veuillez remplir tous les champs";
	include('Vues/add_capteur.vue.php');
	}


?>

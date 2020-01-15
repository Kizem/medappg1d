<?php

include_once("includes/AccesBase.php");
include_once("Modeles/fonction.php");

if(!empty($_SESSION)){
	$new_type = $_GET['type'];
	$new_seuil = $_GET['seuil'];
	$idCapteur = $_GET['cap'];
	/* ajouter ici les contraintes qui seront fournies par le client */
	$req = updateCapteurJS($db, $new_type, $new_seuil, $idCapteur);
}

?>
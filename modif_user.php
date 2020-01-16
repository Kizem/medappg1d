<?php

include_once("includes/AccesBase.php");
include_once("Modeles/fonction.php");

if(!empty($_SESSION)){
	$new_login = $_GET['login'];
	$new_mail = $_GET['mail'];
	$new_mdp = $_GET['mdp'];
	$idUser = $_GET['user'];
	/* ajouter ici les contraintes qui seront fournies par le client */
	$req=modificationInformationUtilisateur($db, $new_login, 'login', $idUser);
	$req=modificationInformationUtilisateur($db, $new_mail, 'Mail', $idUser);

	$nouveauMDP = password_hash($new_mdp,PASSWORD_DEFAULT);
	$req=modificationInformationUtilisateur($db, $nouveauMDP, 'Mdp', $idUser);

	if($resultat!=""){
		$resultat ="-Toutes vos modifications ont bien été prises en compte. /n";
	}
}

?>
<?php

include_once('includes/AccesBase.php');
include_once('Modeles/fonction.php');


if(isset($_GET["action"]) && ($_GET["action"]=="supprimer")) {
		$reponse=deleteCodeInscription($db,$_GET["id"]);
	}

if(isset($_GET["action"]) && ($_GET["action"]=="ajouter")) {
	$reponse=addCodeUtilisateur($db,genererChaineAleatoire(10),$_SESSION['idEntite'],"Utilisateur");
}
$rep = getCodeEntite($db, $_SESSION['idEntite']);
$fonction = $rep->fetchall();
include_once('Vues/gestionCodeInscription.vue.php');
?>
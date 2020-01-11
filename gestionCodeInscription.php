<?php

include_once('includes/AccesBase.php');
include_once('Modeles/fonction.php');
$bool = false;
if($_SESSION['Type']=='Administrateur'){
	$bool=TRUE;
	$req = $db->prepare("SELECT * FROM `codeinscription` ORDER BY fonction");
	$req->execute();
	
	$fonction = $req->fetchall();
	
}
else if($_SESSION['Type']=='Gestionnaire'){
	$rep = getCodeEntite($db, $_SESSION['idEntite']);
	$fonction = $rep->fetchall();

	}
if(isset($_GET["action"]) && ($_GET["action"]=="supprimer")) {
		$reponse=deleteCodeInscription($db,$_GET["id"]);
	}

if(isset($_GET["action"]) ) {
	if(($_GET["action"]=="ajouter")){
		$reponse=addCodeUtilisateur($db,genererChaineAleatoire(10),$_SESSION['idEntite'],"Utilisateur");
	}
	if(($_GET["action"]=="ajouterAdmin")){
		$reponse=addCodeUtilisateur($db,genererChaineAleatoire(10),$_SESSION['idEntite'],"Administrateur");
	}
	if(($_GET["action"]=="ajouterGestion")){
		$reponse=addCodeUtilisateur($db,genererChaineAleatoire(10),$_SESSION['idEntite'],"Gestionnaire");
	}
	
}


include_once('Vues/gestionCodeInscription.vue.php');
?>
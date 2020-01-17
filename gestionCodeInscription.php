<?php

include_once('includes/AccesBase.php');
include_once('Modeles/fonction.php');
if(!empty($_SESSION)){
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
			//on met a jour la fonction
			$req = $db->prepare("SELECT * FROM `codeinscription` ORDER BY fonction");
			$req->execute();
			$fonction = $req->fetchall();
		}

	if(isset($_GET["action"]) ) {
		if(($_GET["action"]=="ajouter")){
			$reponse=addCodeUtilisateur($db,genererChaineAleatoire(10),$_SESSION['idEntite'],"Utilisateur");
			//on met a jour la fonction
			if($_SESSION['Type']=='Gestionnaire'){
				$req = getCodeEntite($db, $_SESSION['idEntite']);
			}
			else if($_SESSION['Type']=='Administrateur'){
				$req = $db->prepare("SELECT * FROM `codeinscription` ORDER BY fonction");
			}
			
			$req->execute();
			$fonction = $req->fetchall();

		}
		if(($_GET["action"]=="ajouterAdmin")){
			$reponse=addCodeUtilisateur($db,genererChaineAleatoire(10),$_SESSION['idEntite'],"Administrateur");
			//on met a jour la fonction
			$req = $db->prepare("SELECT * FROM `codeinscription` ORDER BY fonction");
			$req->execute();
			$fonction = $req->fetchall();
		}
		if(($_GET["action"]=="ajouterGestion")){
			$reponse=addCodeUtilisateur($db,genererChaineAleatoire(10),$_SESSION['idEntite'],"Gestionnaire");
			//on met a jour la fonction
			$req = $db->prepare("SELECT * FROM `codeinscription` ORDER BY fonction");
			$req->execute();
			$fonction = $req->fetchall();
		}
		
	}


	include_once('Vues/gestionCodeInscription.vue.php');
}
?>
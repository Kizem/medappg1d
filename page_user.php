<?php

include_once("includes/AccesBase.php");
include_once("Modeles/fonction.php");


if(empty($_GET['user'])) /*OR $_SESSION['Type'] != 'Administrateur'*/{
	header("Location: monEspace.php");
}
else{

	$utilisateur = $db->prepare('SELECT * FROM utilisateur WHERE idUser = ?');
	$utilisateur -> execute(array($_GET['user']));
	$u = $utilisateur->fetch();
	$erreur="";
	$resultat="";
	$login=$u['login'];
	$Mdp=$u['Mdp'];
	$Mail=$u['Mail'];
	$Prenom=$u['Prenom'];
	$Nom=$u['Nom'];
	$idUser=$u['idUser'];

	if(!empty($_POST['mdpActuel'])){
		$mdpActuel=$_POST['mdpActuel'];
		if(!empty($_POST['nouveauMDP'])){
			if(password_verify($mdpActuel, $Mdp)){
				$nouveauMDP=$_POST['nouveauMDP'];
				$nouveauMDP = password_hash($nouveauMDP,PASSWORD_DEFAULT);
				$req=modificationInformationUtilisateur($db, $nouveauMDP, 'Mdp', $idUser);
				$resultat="-Votre mot de passe a bien été modifié. /n";
			}
			else{
				$erreur="-Le mot de passe actuel est érroné /n";
			}
			
		}
		else{
			$erreur="Veuillez choisir un nouveau mot de passe";
		}
	}


}


include_once('Vues/page_user.vue.php');
?>

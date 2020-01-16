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

}


include_once('Vues/page_user.vue.php');
?>

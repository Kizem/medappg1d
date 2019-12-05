<?php
/*
index.php

Page d'acceuil du site. Affichage des 4 derniers cours mis en ligne.
*/
include_once("includes/AccesBase.php");
include_once("Modeles/fonction.php");
if(!isset($_SESSION) OR $_SESSION['Type'] != 'Administrateur'){
	exit();
}
$erreur="";
$resultat="";
$login=$_SESSION['login'];
$Mdp=$_SESSION['Mdp'];
$Type=$_SESSION['Type'];
$Mail=$_SESSION['Mail'];
$Prenom=$_SESSION['Prenom'];
$Nom=$_SESSION['Nom'];
$Sexe=$_SESSION['Sexe'];
$Taille=$_SESSION['Taille'];
$DateDeNaissance=$_SESSION['DateDeNaissance'];
$Poids=$_SESSION['Poids'];
$idUser=$_SESSION['idUser'];

if(!empty($_POST['Poids'])){
	$Poids=$_POST['Poids'];
	echo $Poids;
	$req=modificationInformationUtilisateur($db, $Poids, 'Poids', $idUser);
	if($resultat!=""){
		$resultat .="-Votre Poids a bien été mis à jour.";
	}
	else{
		$resultat ="-Votre Poids a bien été mis à jour. <br/>";
	}
}
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
if(!empty($_POST['listeSexe'])){
	$Sexe=$_POST['listeSexe'];
	switch ($Sexe) {
		case '1':
			$Sexe="Homme";
			break;
		case '2':
			$Sexe="Femme";
			break;
		case '3':
			$Sexe="Autre";
			break;	
		default:
			$Sexe="Homme";
			break;
	}
	$req=modificationInformationUtilisateur($db, $Sexe, 'Sexe', $idUser);
	if($resultat!=""){
		$resultat .='-Votre sexe a bien été mis à jour.';
	}
	
}
if(!empty($_POST['Taille'])){
	$Taille=$_POST['Taille'];
	echo $Taille;
	$req=modificationInformationUtilisateur($db, $Taille, 'Taille', $idUser);
	if($resultat!=""){
		$resultat .="-Votre taille a bien été mise à jour. /n";
	}
}
if(!empty($_POST['DateDeNaissance'])){
	$DateDeNaissance=$_POST['DateDeNaissance'];
	echo $DateDeNaissance;
	$req=modificationInformationUtilisateur($db, $DateDeNaissance, 'DateDeNaissance', $idUser);
	if($resultat!=""){
		$resultat .="-Votre date de naissance a bien été mise à jour.";
	}
}
echo $resultat;
include_once('Vues/Profil.vue.php');
?>

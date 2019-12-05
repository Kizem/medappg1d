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
$login=$_SESSION['login'];
$Mdp=$_SESSION['Mdp'];
$Type=$_SESSION['Type'];
$Mail=$_SESSION['Mail'];
$Prenom=$_SESSION['Prenom'];
$Nom=$_SESSION['Nom'];
$Sexe=$_SESSION['Sexe'];
$Taille=$_SESSION['Taille'];
$DateDeNaissance=$_SESSION['DateDeNaissance'];
$Poids==$_SESSION['Poids'];
include_once('Vues/Profil.vue.php');
?>

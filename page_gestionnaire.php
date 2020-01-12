<?php
include_once("includes/AccesBase.php");
include_once("Modeles/fonction.php");
if(empty($_SESSION)){
	exit();
}
$nom=$_SESSION['Nom'];
$prenom=$_SESSION['Prenom'];
$cheminPhoto=$_SESSION['cheminPhoto'];
if(empty($cheminPhoto)){
	$cheminPhoto="ressources/PhotoDeProfil.png";
}
if(isset($_GET['delete_cap']) AND !empty($_GET['delete_cap'])){
	//on vient supprimer l'utilisateur qui a pour id la valeur de ? dans l'url
	$req = $db->prepare('DELETE FROM capteur WHERE idCapteur = ?');
	$req -> execute(array($_GET['delete_cap']));

}

$capteurs = $db->query('SELECT * FROM capteur ORDER BY idCapteur DESC'); //permet de classer les capteurs par ordre d'ajout(les derniers en tête)

include_once('Vues/page_gestionnaire.vue.php');
?>

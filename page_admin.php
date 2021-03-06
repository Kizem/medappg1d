<?php
/*

inclure la page administrateur

*/
include_once("includes/AccesBase.php");
include_once("Modeles/fonction.php");

//Si pas de connexion, ou pas administrateur
if(!isset($_SESSION) OR $_SESSION['Type'] != 'Administrateur'){
	exit();
}

if(isset($_GET['delete']) AND !empty($_GET['delete'])){
	//on vient supprimer l'utilisateur qui a pour id la valeur de ? dans l'url
	$req = $db->prepare('DELETE FROM utilisateur WHERE idUser = ?');
	$req -> execute(array($_GET['delete']));


}

if(isset($_GET['delete_cap']) AND !empty($_GET['delete_cap'])){
	//on vient supprimer le capteur qui a pour id la valeur de ? dans l'url
	$req = $db->prepare('DELETE FROM capteur WHERE idCapteur = ?');
	$req -> execute(array($_GET['delete_cap']));

}

if(isset($_GET['modifier']) AND !empty($_GET['modifier'])){
	$see_user = $_GET['modifier'];
	header("Location: page_user.php?user=$see_user");
}

$utilisateurs = $db->query('SELECT * FROM utilisateur ORDER BY idUser DESC'); //permet de classer les users par ordre d'arrivée (les derniers en tête)


$capteurs = $db->query('SELECT * FROM capteur ORDER BY idCapteur DESC'); //permet de classer les capteurs par ordre d'ajout(les derniers en tête)

$entites = $db->query('SELECT * FROM entit ORDER BY idEntité DESC');

$boitier = $db->query('SELECT * FROM boitier ORDER BY idBoitier DESC');

$gestionnaires = $db->query("SELECT * FROM utilisateur WHERE Type='Gestionnaire' ORDER BY idBoitier DESC");


include_once('Vues/page_admin.vue.php');
?>

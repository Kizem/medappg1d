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
	//on vient supprimer l'utilisateur qui a pour id la valeur de ? dans l'url
	$req = $db->prepare('DELETE FROM capteur WHERE idCapteur = ?');
	$req -> execute(array($_GET['delete_cap']));

}


$utilisateurs = $db->query('SELECT * FROM utilisateur ORDER BY idUser DESC'); //permet de classer les users par ordre d'arrivée (les derniers en tête)


$capteurs = $db->query('SELECT * FROM capteur ORDER BY idCapteur DESC'); //permet de classer les capteurs par ordre d'ajout(les derniers en tête)


include_once('Vues/page_admin.vue.php');
?>

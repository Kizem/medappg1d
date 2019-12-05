<?php
/*

inclure la page administrateur

*/
include_once("includes/AccesBase.php");
include_once("Modeles/fonction.php");

//maj_session($db,$_SESSION['idUser']);

//Si pas de connexion, ou pas administrateur
if(!isset($_SESSION) OR $_SESSION['Type'] != 'Administrateur'){
	exit();
}
//on vient tout d'abord effectuer une mise à jour des infos de la session avant de modifier


if(isset($_GET['delete']) AND !empty($_GET['delete'])){
	//on vient supprimer l'utilisateur qui a pour id la valeur de ? dans l'url
	$req = $db->prepare('DELETE FROM utilisateur WHERE idUser = ?');
	$req -> execute(array($_GET['delete']));


}

$utilisateurs = $db->query('SELECT * FROM utilisateur ORDER BY idUser DESC'); //permet de classer les users par ordre d'arrivée (les derniers en tête)

include_once('Vues/page_admin.vue.php');
?>

<?php
// faire un if avec un bouton pour rediriger vers la page de connexion
// session_start();
include_once('includes/AccesBase.php');
include_once('Modeles/fonction.php');
if(!empty($_GET['user'])){
	include_once('Vues/Utilisateur.vue.php');
}

?>
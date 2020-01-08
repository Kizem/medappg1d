<?php 
require("Modeles/fonction.php");
require("includes/AccesBase.php");

if(isset($_POST['Theme1']) && !empty($_POST['Theme1'])){
	$id = 1;
	$rep = changerNomTheme($db, $_POST['Theme1'], $id);
	include_once('Vues/Edition_FAQ.vue.php');
}

elseif (isset($_POST['Theme2']) && !empty($_POST['Theme2'])) {
	$id = 2;
	$rep = changerNomTheme($db, $_POST['Theme2'], $id);
	include_once('Vues/Edition_FAQ.vue.php');
}

elseif (isset($_POST['Theme3']) && !empty($_POST['Theme3'])) {
	$id = 3;
	$rep = changerNomTheme($db, $_POST['Theme3'], $id);
	include_once('Vues/Edition_FAQ.vue.php');
}

else{

	$requete = 1;

	include_once('Vues/Edition_FAQ.vue.php');
}




?>
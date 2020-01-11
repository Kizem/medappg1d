<?php
/*
page capteur

*/
include_once("includes/AccesBase.php");
include_once("Modeles/fonction.php");



	if(isset($_GET['modif_cap']) AND !empty($_GET['modif_cap'])){
		$idCap=$_GET['modif_cap'];
		$this_cap = $db->prepare('SELECT * FROM capteur WHERE idCapteur = ?');
		$this_cap -> execute(array($_GET['modif_cap']));

	}


include_once('Vues/page_capteur.vue.php');
?>

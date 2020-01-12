<?php 

require_once("includes/AccesBase.php");
require_once("Modeles/fonction.php");
if(!empty($_SESSION)){
	$rep = getTest($db);
	$fonction = $rep->fetchall();

	include('Vues/affichageTest.vue.php');
}

?>
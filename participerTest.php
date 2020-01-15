<?php
require("Modeles/fonction.php");
require("includes/AccesBase.php");
$erreur="";

if(empty($_SESSION)){
	include('Vues/connexion.vue.php');
}
else{
	if(!empty($_POST)){

	}
	include('Vues/participerTest.vue.php');
}
?>
<?php

require("Modeles/fonction.php");
require("includes/AccesBase.php");

$erreur="";
$i = 0;

// if(!empty($_POST['reference']) AND (!empty($_POST['listeDeroulante'])){
	if(!empty($_POST)){


	$ref = htmlspecialchars($_POST['reference']);

		if(boitierDisponible($db, $ref)){

			insertBoitier($db, $ref);

			$erreur="La création du boîtier s'est bien déroulée";
			include('Vues/new_boitier.vue.php');
		
						
		}
		else{
			$erreur= "Ce boîtier existe déjà";
			include('Vues/new_boitier.vue.php');
		}
	

}
else{
	$erreur= "Veuillez remplir tous les champs";
	include('Vues/new_boitier.vue.php');
	}

?>
<?php

require("Modeles/fonction.php");
require("includes/AccesBase.php");
if(!empty($_SESSION)){
	$erreur="";
	$i = 0;
	$entite;
	$ListeEntite = $db->query('SELECT * FROM entit ORDER BY idEntité DESC');


	// if(!empty($_POST['reference']) AND (!empty($_POST['listeDeroulante'])){
		if(!empty($_POST)){


		$ref = htmlspecialchars($_POST['reference']);
		$entite = htmlspecialchars($_POST['listeDeroulante']);
		$idEntite=entiteDisponible($db,$entite);

		//if(!is_bool($idEntite)){ fonctionne pas correctement : à voir plus tard

			if(boitierDisponible($db, $ref)){

				$TabAllEntite = $ListeEntite->fetchall();

				insertBoitier($db, $ref, $TabAllEntite[(int)$_POST['listeDeroulante']]['idEntité']);

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
	}

?>
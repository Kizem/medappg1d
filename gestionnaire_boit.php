<?php

require("Modeles/fonction.php");
require("includes/AccesBase.php");
if(!empty($_SESSION)){
	$erreur="";
	$i = 0;

	$ListeBoitiers = $db->query('SELECT * FROM boitier ORDER BY idBoitier DESC');


	// if(!empty($_POST['reference']) AND (!empty($_POST['listeDeroulante'])){
		if(!empty($_POST)){

		$ref_boit = htmlspecialchars($_POST['reference']);

		$Pseudo=htmlspecialchars($_POST['pseudo']);
		$idUser=pseudoDisponible($db, $Pseudo);


			if(!is_bool(boitierDisponible($db, $ref_boit))){
				if(is_bool($idUser) && $idUser==TRUE){
					$erreur = "Utilisateur inconnu";
					include_once('Vues/gestionnaire_boit.vue.php');

				}
				else{
					
					$TabAllBoitier = $ListeBoitiers->fetchall();
					majGestionnaire($db,$Pseudo,$TabAllBoitier[(int)$_POST['reference']]['idBoitier']);

					$erreur="L'association s'est bien déroulée";
					include('Vues/gestionnaire_boit.vue.php');
				}
							
			}
			else{
				$erreur= "Ce boîtier n'existe pas";
				include('Vues/gestionnaire_boit.vue.php');
			}

	}
	else{
		$erreur= "Veuillez remplir tous les champs";
		include('Vues/gestionnaire_boit.vue.php');
		}
	}

?>
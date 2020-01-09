<?php

require("Modeles/fonction.php");
require("includes/AccesBase.php");

$erreur="";
$i = 0;

//$ListeEntite = $db->query('SELECT * FROM entit ORDER BY idEntité DESC');
$ListeBoitiers = $db->query('SELECT * FROM boitier ORDER BY idBoitier DESC');


// if(!empty($_POST['reference']) AND (!empty($_POST['listeDeroulante'])){
	if(!empty($_POST)){

	//$entite = htmlspecialchars($_POST['listeDeroulante']);
	$ref_boit = htmlspecialchars($_POST['reference']);
	//$idEntite = entiteDisponible($db,$entite);

	$Pseudo=htmlspecialchars($_POST['pseudo']);
	$idUser=pseudoDisponible($db, $Pseudo);


	// if($idEntite!=TRUE){
		if(!is_bool(boitierDisponible($db, $ref_boit))){
			if(is_bool($idUser) && $idUser==TRUE){
				$erreur = "Utilisateur inconnu";
				include_once('Vues/gestionnaire_boit.vue.php');

			}
			else{

				//$TabAllEntite = $ListeEntite->fetchall();


				$TabAllBoitier = $ListeBoitiers->fetchall();
				majGestionnaire($db,$Pseudo,$TabAllBoitier[(int)$_POST['reference']]['idBoitier']);

				/*--- Mais là avec ça ça va mettre associer un unique boitier à l'entité non ? du coup je serais d'avis à laisser null ----*/
				//majEntite($db, $idBoitier, $TabAllEntite[(int)$_POST['listeDeroulante']]['idEntité']);


				$erreur="L'association s'est bien déroulée";
				include('Vues/gestionnaire_boit.vue.php');
			}
						
		}
		else{
			$erreur= "Ce boîtier n'existe pas";
			include('Vues/gestionnaire_boit.vue.php');
		}
	// }
	// else{
	// 	$erreur="Cette entité n'existe pas";
	// 	include('Vues/gestionnaire_boit.vue.php');

	// }

}
else{
	$erreur= "Veuillez remplir tous les champs";
	include('Vues/gestionnaire_boit.vue.php');
	}

?>
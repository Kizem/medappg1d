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
		$Userexiste=pseudoDisponible($db, $Pseudo);

		//On vient récupérer l'id gesitonnaire associé au pseudo entré

		$user = $db->query("SELECT * FROM utilisateur WHERE login='$Pseudo'");
		$i_user = $user->fetch();
		$idUser = $i_user['idUser'];

		//On vient récupérer l'id entité associé à la référence de boîtier entrée

		$entit = $db->query("SELECT * FROM boitier WHERE Reference='$ref_boit'");
		$i_entit = $entit->fetch();
		$idEntité = $i_entit['idEntité'];

			if(!is_bool(boitierDisponible($db, $ref_boit))){
				if(is_bool($Userexiste) && $Userexiste==TRUE){
					$erreur = "Utilisateur inconnu";
					include_once('Vues/gestionnaire_boit.vue.php');

				}
				else{
					
					majGestionnaire($db,$Pseudo,$i_entit['idBoitier']);
					inserUsersEntite($db, $idUser,$idEntité);

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
<?php

require("Modeles/fonction.php");
require("includes/AccesBase.php");

$erreur="";
if(!empty($_POST['nom']) AND !empty($_POST['adresse']) AND ($_POST['listeDeroulante']!=0)){


	$name = htmlspecialchars($_POST['nom']);
	$adresse = htmlspecialchars($_POST['adresse']);
	$typeEntite = htmlspecialchars($_POST['listeDeroulante']);

		if(is_bool(entiteDisponible($db, $name)) && entiteDisponible($db, $name)==TRUE){

						switch ($typeEntite) {
							case '1':
								$typeEntite = "Auto-école";
								break;
							case '2':
								$typeEntite = "Centre de formation pour pilotes";
								break;
							default:
								$typeEntite = "Auto-école";
								break;
						}

						$req2 = insertEntite($db, $name, $adresse, $typeEntite);

						$erreur="";
						include('monEspace.php');
						echo$new_boit;
		}
		else{
			$erreur= "Cette entité existe déjà";
			include('Vues/new_entite.vue.php');
		}
	

}
else{
	$erreur= "Veuillez remplir tous les champs";
	include('Vues/new_entite.vue.php');
	}

?>
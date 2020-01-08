<?php

require("Modeles/fonction.php");
require("includes/AccesBase.php");

$erreur="";
if(!empty($_POST['nom']) AND !empty($_POST['adresse']) AND !empty($_POST['gestionnaire']) AND ($_POST['listeDeroulante']!=0)){


	$name = htmlspecialchars($_POST['nom']);
	$adresse = htmlspecialchars($_POST['adresse']);
	$gestionnaire = htmlspecialchars($_POST['gestionnaire']);
	$typeEntite = htmlspecialchars($_POST['listeDeroulante']);
	$ref = htmlspecialchars($_POST['reference']);

		if(is_bool(entiteDisponible($db, $name)) && entiteDisponible($db, $name)==TRUE){
				if(gestionnaireDisponible($db, $gestionnaire)){
					if(boitierDisponible($db, $ref)){

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

						$req = insertBoitier($db, $ref);

						$reqboit = $db->query("SELECT idBoitier FROM boitier WHERE Reference='$ref'");
						$new_boit = $reqboit->fetch();


						$req2 = insertEntite($db, $name, $adresse, $typeEntite, $new_boit);

						$req3 = majGestionnaire($db, $gestionnaire, $new_boit);

						$erreur="";
						include('monEspace.php');
						echo$new_boit;

					}
					else{
						$erreur= "Ce boitier est déjà utilisé (Référence)";
						include('Vues/new_boitier.vue.php');
					}

				}
				else{
					$erreur= "Ce gestionnaire est déjà associé à une entité";
					include('Vues/new_boitier.vue.php');
				}
		}
		else{
			$erreur= "Cette entité existe déjà";
			include('Vues/new_boitier.vue.php');
		}
	

}
else{
	$erreur= "Veuillez remplir tous les champs";
	include('Vues/new_boitier.vue.php');
	}

?>
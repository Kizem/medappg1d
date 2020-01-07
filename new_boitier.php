<?php

require("Modeles/fonction.php");
require("includes/AccesBase.php");

$erreur="";
if(!empty($_POST['nom']) AND !empty($_POST['adresse']) AND !empty($_POST['gestionnaire']) AND ($_POST['listeDeroulante']!=0)){


	$name = htmlspecialchars($_POST['nom']);
	$adresse = htmlspecialchars($_POST['adresse']);
	$gestionnaire = htmlspecialchars($_POST['gestionnaire']);
	$typeEntite = htmlspecialchars($_POST['listeDeroulante']);

		if(is_bool(entiteDisponible($db, $name)) && entiteDisponible($db, $name)==TRUE){
				if(gestionnaireDisponible($db, $gestionnaire)){
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
						if(empty($fonction)){	
							$erreur= "Code introuvable";
							//include('Vues/Inscription.vue.php');

						}
						else if($fonction["fonction"]==$typeUtilisateur){
							$req = insertUsers($db, $nom, $prenom, $mail, $Mdp, $typeUtilisateur, $login);
							$erreur="";
							include('connexion.php');

						}
						else{
							$erreur= "Ce code ne vous permet pas d'obtenir le privilège saisie";
							include('Vues/Inscription.vue.php');
						}
					}
					else{
						$erreur= "Les mots de passes ne correspondent pas";
						include('Vues/Inscription.vue.php');
					}
				}
				else{
					$erreur= "Cette adresse mail n'est pas disponible";
					include('Vues/Inscription.vue.php');
				}
		}
		else{
			$erreur= "Cette entité existe déjà";
			include('Vues/Inscription.vue.php');
		}
	

}
else{
	$erreur= "Veuillez remplir tous les champs";
	include('Vues/Inscription.vue.php');
	}
	/*echo 'Votre nom est '.$_POST['nom'];
}
}
else{
	echo 'nom pas declare';*/



?>
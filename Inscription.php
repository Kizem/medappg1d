
<?php


require("Modeles/fonction.php");
require("includes/AccesBase.php");
$erreur="";
if(!empty($_POST['login']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND !empty($_POST['motDePasse']) AND !empty($_POST['confirmMDP']) AND !empty($_POST['codeInscription']) AND ($_POST['listeDeroulante']!=0)){


	$login = htmlspecialchars($_POST['login']);
	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$mail = htmlspecialchars($_POST['mail']);
	$Mdp = htmlspecialchars($_POST['motDePasse']);
	$mdp2 = htmlspecialchars($_POST['confirmMDP']);
	$typeUtilisateur = htmlspecialchars($_POST['listeDeroulante']);
	$codeInscription = htmlspecialchars($_POST['codeInscription']);

	if(!empty($_POST['CGUaccepted'])){
		if(is_bool(pseudoDisponible($db, $login)) && pseudoDisponible($db, $login)==TRUE){
			if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
				if(mailDisponible($db, $mail)){
					$fonction= detectionCode($db, $codeInscription);
					
					
					if($Mdp==$mdp2){
						$Mdp = password_hash($Mdp,PASSWORD_DEFAULT);
						switch ($typeUtilisateur) {
							case '1':
								$typeUtilisateur = "Utilisateur";
								break;
							case '2':
								$typeUtilisateur = "Gestionnaire";
								break;
							case '3':
								$typeUtilisateur = "Administrateur";
								break;
							default:
								$typeUtilisateur = "Utilisateur";
								break;
						}
						if($fonction==TRUE){	
							$erreur= "Code introuvable";
							//include('Vues/Inscription.vue.php');

						}

						else{
								for ($i=0; $i < count($fonction); $i++) {
									if($fonction[i]['fonction']==$typeUtilisateur){
										$req = insertUsers($db, $nom, $prenom, $mail, $Mdp, $typeUtilisateur, $login);
								        $erreur="";
								        break;
									}
								}
								if($fonction[i]['fonction']==$typeUtilisateur){
									include('connexion.php');
								}
								else{
									$erreur= "Ce code ne vous permet pas d'obtenir le privilège saisie";
								include('Vues/Inscription.vue.php');
								}
							}
						
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
				$erreur= "Cette adresse mail n'est pas valide";
				include('Vues/Inscription.vue.php');
			}
		}
		else{
			$erreur= "Ce pseudo est déja utilisé";
			include('Vues/Inscription.vue.php');
		}
	}
	else{
		$erreur= "Veuillez accepter les CGU et mentions légales pour vous inscrire";
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


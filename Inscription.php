
<?php


require("Modeles/fonction.php");
require("includes/AccesBase.php");
$erreur="";
if(!empty($_POST['login']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND !empty($_POST['motDePasse']) AND !empty($_POST['confirmMDP']) AND !empty($_POST['codeInscription']) AND ($_POST['listeDeroulante']!=0)){


	$login = htmlspecialchars($_POST['login']);
	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$mail = htmlspecialchars($_POST['mail']);
	$mdp1 = htmlspecialchars($_POST['motDePasse']);
	$mdp2 = htmlspecialchars($_POST['confirmMDP']);
	$typeUtilisateur = htmlspecialchars($_POST['listeDeroulante']);
	$codeInscription = htmlspecialchars($_POST['codeInscription']);

	if(!empty($_POST['CGUaccepted'])){
		if(pseudoDisponible($db, $login)){
			if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
				if(mailDisponible($db, $mail)){
					$req= detectionCode($db, $codeInscription);
					$fonction= $req->fetch();
					echo $fonction["fonction"];
					if($mdp1==$mdp2){
						$mdp1 = password_hash($mdp1,PASSWORD_DEFAULT);
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
						if($fonction["fonction"]==$typeUtilisateur){
							$req = insertUsers($db, $nom, $prenom, $mail, $mdp1, $typeUtilisateur, $login);
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


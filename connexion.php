<?php 
		include_once("includes/AccesBase.php");
		if (!empty($_POST['Mdp'])and !empty($_POST['login'])){
			$login = $_POST['login']; // Recup depuis un formulaire
			$Mdp = $_POST['Mdp'];
			$Mdp_hash = "";
			$sql = "SELECT * FROM Utilisateur WHERE  login= '$login'";
			$req = $db->prepare ($sql);
			//$marqueur= array('login'=>$login,'Mdp'=>$Mdp_hash);
			$req->execute ();
			$lesEnreg = $req->fetch();
			 
			$Mdp_hash=$lesEnreg['Mdp'];
			$Type=$lesEnreg['Type'];
			$Mail=$lesEnreg['Mail'];
			$Nom=$lesEnreg['Nom'];
			$Prenom=$lesEnreg['Prenom'];
			$Sexe=$lesEnreg['Sexe'];
			$Taille=$lesEnreg['Taille'];
			$Poids=$lesEnreg['Poids'];
			$DateDeNaissance=$lesEnreg['DateDeNaissance'];
			$idUser=$lesEnreg['idUser'];
			$cheminPhoto=$lesEnreg['Photos'];
			$idBoitier=$lesEnreg['idBoitier'];
			$req=$db->prepare ("SELECT idEntité FROM `utilisateur/entit` WHERE idUser='2'");
			$req->execute ();
			$idEntite=$req->fetch();
			
			
			if (password_verify($Mdp, $Mdp_hash)) {
				//session_start();
				$_SESSION['login']=$login;
				$_SESSION['Mdp']=$Mdp_hash;
				$_SESSION['Type']=$Type;
				$_SESSION['Mail']=$Mail;
				$_SESSION['Prenom']=$Prenom;
				$_SESSION['Nom']=$Nom;
				$_SESSION['Sexe']=$Sexe;
				$_SESSION['Taille']=$Taille;
				$_SESSION['Poids']=$Poids;
				$_SESSION['DateDeNaissance']=$DateDeNaissance;
				$_SESSION['idUser']=$idUser;
				$_SESSION['cheminPhoto']=$cheminPhoto;
				$_SESSION['idBoitier']=$idBoitier;
				$_SESSION['idEntite']=$idEntite['idEntité'];
				header ('Location: index.php');

			}
			else{
			$erreur = "Mauvais mot de passe";
			include_once('Vues/connexion.vue.php');

    			
			}
		}
		else{
			include_once('Vues/connexion.vue.php');
		}	
			
?>
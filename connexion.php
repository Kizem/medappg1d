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
				header ('Location: index.php');
			}
			else{
			$erreur = "Mauavais mot de passe";
			include_once('Vues/connexion.vue.php');

    			
			}
		}
		else{
			include_once('Vues/connexion.vue.php');
		}	
			
?>
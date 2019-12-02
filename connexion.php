<?php 
		include("includes/AccesBase.php");
		if (!empty($_POST['Mdp'])and !empty($_POST['login'])){
			$login = $_POST['login']; // Recup depuis un formulaire
			$Mdp = $_POST['Mdp'];
			$Mdp_hash = "";
			$sql = "SELECT * FROM Utilisateur WHERE  login= '$login'";
			$req = $db->prepare ($sql);
			//$marqueur= array('login'=>$login,'Mdp'=>$Mdp_hash);
			$req->execute ();
			$lesEnreg = $req->fetch();
			 
			$Mdp_hash= $lesEnreg['Mdp'];
			print_r($lesEnreg);
			echo "$sql";
			
			
			if (password_verify($Mdp, $Mdp_hash)) {
				session_start();
				$_SESSION['login']=$login;
				$_SESSION['Mdp']=$Mdp;
				header ('Location: index.php');
			}
			else{
			$erreur = "Mauavais mot de passe";
			include_once('Vues/connexion.vue.php');

    			
			}
		else{
			include_once('Vues/connexion.vue.php');
		}	
			}
?>
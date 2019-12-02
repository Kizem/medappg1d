<?php 
		include("includes/AccesBase.php");
		if (!empty($_POST['Mdp'])and !empty($_POST['login'])){
			$login = $_POST['login']; // Recup depuis un formulaire
			$Mdp = $_POST['Mdp'];
			$sql = "SELECT * FROM utilisateur WHERE  login= :login and Mdp= :Mdp";
			$req = $db->prepare ($sql);
			$marqueur= array('login'=>$login,'Mdp'=>$Mdp);

			$req->execute ($marqueur);
			$lesEnreg = $req->fetchall();
			$req->closeCursor (); 
			
			print_r($lesEnreg);
			echo "$sql";

			if ( empty($lesEnreg)) {

				echo $sql;
				
			
			}
			else{
				session_start();
				$_SESSION['login']=$login;
				$_SESSION['Mdp']=$Mdp;
				header ('Location: index.php');
			}
		}
		else{
			include_once('Vues/connexion.vue.php');
		}	
?>
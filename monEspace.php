<?php

include_once("includes/AccesBase.php");

if(isset($_SESSION['Type'])){

	if($_SESSION['Type']=='Administrateur'){

		header('Location: page_admin.php');

	}
	else if($_SESSION['Type']=='Utilisateur'){

		// header('Location: Utilisateur.php');
		$id = $_SESSION['idUser'];
		header("Location: Utilisateur.php?user=$id");
		
	}
	else if($_SESSION['Type']=='Gestionnaire'){

		header('Location: page_gestionnaire.php');
		
	}
	else{
		include('connexion.php');
	}

}
else{
	include('connexion.php');
}

?>
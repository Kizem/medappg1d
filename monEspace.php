<?php

include_once("includes/AccesBase.php");

if(isset($_SESSION['Type'])){

	if($_SESSION['Type']=='Administrateur'){

		//include('page_admin.php');
		header('Location: page_admin.php');

	}
	else if($_SESSION['Type']=='Utilisateur'){

		//include('Utilisateur.php');
		header('Location: Utilisateur.php');
		
	}
	else if($_SESSION['Type']=='Gestionnaire'){

		//include('Utilisateur.php');
		header('Location: page_gestionnaire.php');
		//mohammad pour l'instant, pour faire mes tests apres tu pourras mettre la page gestionnaire
		
	}
	else{
		include('connexion.php');
	}

}
else{
	include('connexion.php');
}

// if(isset($_SESSION['Type']) And ($_SESSION['Type']=='Administrateur') /*($_SESSION['Type']="Administrateur")*/){
// 	include('page_admin.php');
// }
// if(isset($_SESSION['Type']) And ($_SESSION['Type']=='Utilisateur')/*$_SESSION['Type']="Utilisateur"*/){

// 	include('Utilisateur.php');
// }



?>
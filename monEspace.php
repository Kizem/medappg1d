<?php

session_start();

if(isset($_SESSION['Type'])){

	if($_SESSION['Type']=='Administrateur'){

		include('page_admin.php');

	}
	else if($_SESSION['Type']=='Utilisateur'){

		// include('Utilisateur.php');
		header('Location: Utilisateur.php');
		
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
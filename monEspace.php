<?php

if(isset($_SESSION['admin']) OR $_SESSION['admin'] = 1){
	include('page_admin.php');
}
else if(isset($_SESSION['user'])){

	include('Utilisateur.php');
}
else(include('connexion.php'));


?>
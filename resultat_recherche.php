<?php 

require("includes/AccesBase.php");
require("Modeles/fonction.php");

if(!empty($_SESSION)){
	//exit();
}

if(isset($_POST['keywords']) && !empty($_POST['keywords'])) {

	if($_SESSION['Type']=="Gestionnaire"){
		$rep = rechercheUser_Gestionnaire($db, $_POST['keywords'], $_SESSION['idBoitier']);
	}
	else{
		$rep = rechercheUtilisateur($db, $_POST['keywords']);
	}
	$fonction = $rep->fetchall();
	include('Vues/resultat_recherche.vue.php');
}

else if (isset($_POST['keywords']) && empty($_POST['keywords'])) {
	header('Location: page_admin.php');
}

?>
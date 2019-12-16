<?php 

require("includes/AccesBase.php");
require("Modeles/fonction.php");



if(isset($_POST['keywords']) && !empty($_POST['keywords'])) {
	$rep = rechercheUtilisateur($db, $_POST['keywords']);
	$fonction = $rep->fetchall();
	//echo $fonction['Prenom'], " ", $fonction['Nom'];
	include('Vues/resultat_recherche.vue.php');
}

else if (isset($_POST['keywords']) && empty($_POST['keywords'])) {
	header('Location: page_admin.php');
}

?>
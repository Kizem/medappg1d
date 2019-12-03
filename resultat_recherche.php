<?php 

require("includes/AccesBase.php");
require("Modeles/fonction.php");



if(isset($_POST['keywords']) && !empty($_POST['keywords'])) {
	$rep = rechercheUtilisateur($db, $_POST['keywords']);
	$fonction = $rep->fetchall();
	//echo $fonction['Prenom'], " ", $fonction['Nom'];
	include('Vues/resultat_recherche.vue.php');
}

elseif (isset($_POST['keywords']) && empty($_POST['keywords'])) {
	include('Vues/FAQ.vue.php');
}

?>
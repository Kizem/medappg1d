<?php 
include_once("includes/AccesBase.php");
include_once("Modeles/fonction.php");

if(empty($_SESSION)){
	echo "voila";
	exit();
}
else if(!empty($_POST)){
	$recherche="SELECT * FROM `utilisateur` WHERE";
	$Type=$_POST['listeDeroulante'];
	$recherche= $recherche." Type='$Type'";
	if(!empty($_POST['Taille'])){
		$Taille=$_POST['Taille'];
		$recherche= $recherche." AND Taille='$Taille'";
	}
	if(!empty($_POST['Poids'])){
		$Poids=$_POST['Poids'];
		$recherche= $recherche." AND Poids='$Poids'";
	}
	if($_POST['listeSexe']!="Tout"){
		$Sexe=$_POST['listeSexe'];
		$recherche= $recherche." AND Sexe='$Sexe'";
	}
	$rep=selectMulticriteres($db,$recherche);
	$fonction = $rep->fetchall();
	print_r($fonction);
	/*$rep = rechercheUtilisateur($db, $_POST['keywords']);
	$fonction = $rep->fetchall();*/
	include('Vues/rechercheMulticriteres.vue.php');
}
else {
	include('Vues/rechercheMulticriteres.vue.php');
}
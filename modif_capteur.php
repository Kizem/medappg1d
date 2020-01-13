<?php

include_once("includes/AccesBase.php");
include_once("Modeles/fonction.php");
if(!empty($_SESSION)){
	$erreur="";
	$i="";
	$ListeBoitier = $db->query('SELECT * FROM boitier ORDER BY idBoitier DESC');

	// if($i!=1){

	// $cap = $_GET['cap_a_modif'];
	// $c = $cap;
	// }

	if(isset($_GET['cap_a_modif']) AND !empty($_GET['cap_a_modif'])){
		// $ce_cap = $db->prepare('SELECT * FROM capteur WHERE idCapteur = ?');
		// $ce_cap -> execute(array($_GET['cap_a_modif']));
		// $cap= $ce_cap->fetch();
		// echo $cap['idCapteur'];
		// if(!empty($_POST['Type']) AND !empty($_POST['Seuil'])){

		$i++;
		if(!empty($_POST)){
			$type_cap = htmlspecialchars($_POST['Type']);
			$seuil = htmlspecialchars($_POST['Seuil']);
			$boitier = htmlspecialchars($_POST['listeDeroulante']);
			$c = $_GET['cap_a_modif'];
			/* ajouter ici les contraintes qui seront fournies par le client */
			$TabAllBoitier = $ListeBoitier->fetchall();

			$req = updateCapteur($db, $type_cap, $seuil, $TabAllBoitier[(int)$_POST['listeDeroulante']]['idBoitier'], $c );
			$erreur="";

			include('Vues/monEspace.php');

		}
		else{
			$erreur="Veuillez remplir tous les champs";
			include('Vues/modif_capteur.vue.php');
			}
	}
}

?>
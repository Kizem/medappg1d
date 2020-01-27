<?php

include_once("includes/AccesBase.php");
include_once("Modeles/fonction.php");
if(!empty($_SESSION)){
	$erreur="";
	$ListeBoitier = $db->query('SELECT * FROM boitier ORDER BY idBoitier DESC');

	if(!empty($_POST['Type']) AND !empty($_POST['Valeur_init']) AND !empty($_POST['Seuil'])){

		$type_cap = htmlspecialchars($_POST['Type']);
		$val_init = htmlspecialchars($_POST['Valeur_init']);
		$seuil = htmlspecialchars($_POST['Seuil']);

		if($_SESSION['Type']=='Gestionnaire'){
			//Si c'est un gestionnaire qui fait l'ajout de capteurs, alors on lui associe directement le boîtier auquel le gestionnaire est lié
			$req = insertCapteur($db, $type_cap, $val_init, $seuil, $_SESSION['idBoitier']);
		}
		else{

			$ref = htmlspecialchars($_POST['reference']);
			$entit = $db->query("SELECT * FROM boitier WHERE Reference='$ref'");
			$i_entit = $entit->fetch();
			$req = insertCapteur($db, $type_cap, $val_init, $seuil, $i_entit['idBoitier']);

		}
		$erreur="";
		include('monEspace.php');

	}
	else{
		include('Vues/add_capteur.vue.php');
		}
	}


?>

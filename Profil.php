<?php

define('TARGET', 'Photos/');    // Repertoire cible
define('MAX_SIZE', 10000000);    // Taille max en octets du fichier
define('WIDTH_MAX', 2000);    // Largeur max de l'image en pixels
define('HEIGHT_MAX', 2000);

include_once("includes/AccesBase.php");
include_once("Modeles/fonction.php");
if(!isset($_SESSION) OR $_SESSION['Type'] != 'Administrateur'){
	exit();
}
$erreur="";
$resultat="";
$login=$_SESSION['login'];
$Mdp=$_SESSION['Mdp'];
$Type=$_SESSION['Type'];
$Mail=$_SESSION['Mail'];
$Prenom=$_SESSION['Prenom'];
$Nom=$_SESSION['Nom'];
$Sexe=$_SESSION['Sexe'];
$Taille=$_SESSION['Taille'];
$DateDeNaissance=$_SESSION['DateDeNaissance'];
$Poids=$_SESSION['Poids'];
$idUser=$_SESSION['idUser'];
$cheminPhoto=$_SESSION['cheminPhoto'];
if(empty($cheminPhoto)){
	$cheminPhoto="ressources/PhotoDeProfil.png";
}
if(isset($_FILES['photo']['name'])){
	$extension=pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
	if($extension=='jpg'){
		$infosImage = getimagesize($_FILES['photo']['tmp_name']);
		if($infosImage[2] >= 1 && $infosImage[2] <= 14){
			if(($infosImage[0] <= WIDTH_MAX) && ($infosImage[1] <= HEIGHT_MAX) && (filesize($_FILES['photo']['tmp_name']) <= MAX_SIZE)){
				if(isset($_FILES['photo']['error']) && UPLOAD_ERR_OK === $_FILES['photo']['error']){
					$nomImage=md5(uniqid()) .'.'. $extension;
					
					//upload du fichier
					if(move_uploaded_file($_FILES['photo']['tmp_name'], TARGET.$nomImage)){
		              $resultat = 'Upload réussi !';
		              $cheminPhoto=TARGET.$nomImage;
		              $req=modificationInformationUtilisateur($db, $cheminPhoto, 'Photos', $idUser);
		            }
		            else{
		              // Sinon on affiche une erreur systeme
		              $resultat = 'Problème lors de l\'upload !';
		            }
				}
				else{
					$erreur="Erreur lors de l'upload du fichier";
				}
          

			}
			else{
				$erreur="La taille de votre fichier est trop grande ou le format est non admis";
			}
        
		}
		else{
			$erreur="le fichier n'est pas une image";
		}
	}

	else{
		$erreur = "extension non permise";
	}
}

if(!empty($_POST['Poids'])){
	$Poids=$_POST['Poids'];
	$req=modificationInformationUtilisateur($db, $Poids, 'Poids', $idUser);
	if($resultat!=""){
		$resultat .="-Votre Poids a bien été mis à jour.";
	}
	else{
		$resultat ="-Votre Poids a bien été mis à jour. <br/>";
	}
}
if(!empty($_POST['mdpActuel'])){
	$mdpActuel=$_POST['mdpActuel'];
	if(!empty($_POST['nouveauMDP'])){
		if(password_verify($mdpActuel, $Mdp)){
			$nouveauMDP=$_POST['nouveauMDP'];
			$nouveauMDP = password_hash($nouveauMDP,PASSWORD_DEFAULT);
			$req=modificationInformationUtilisateur($db, $nouveauMDP, 'Mdp', $idUser);
			$resultat="-Votre mot de passe a bien été modifié. /n";
		}
		else{
			$erreur="-Le mot de passe actuel est érroné /n";
		}
		
	}
	else{
		$erreur="Veuillez choisir un nouveau mot de passe";
	}
}
if(!empty($_POST['listeSexe'])){
	$Sexe=$_POST['listeSexe'];
	switch ($Sexe) {
		case '1':
			$Sexe="Homme";
			break;
		case '2':
			$Sexe="Femme";
			break;
		case '3':
			$Sexe="Autre";
			break;	
		default:
			$Sexe="Homme";
			break;
	}
	$req=modificationInformationUtilisateur($db, $Sexe, 'Sexe', $idUser);
	if($resultat!=""){
		$resultat .='-Votre sexe a bien été mis à jour.';
	}
	
}
if(!empty($_POST['Taille'])){
	$Taille=$_POST['Taille'];
	
	$req=modificationInformationUtilisateur($db, $Taille, 'Taille', $idUser);
	if($resultat!=""){
		$resultat .="-Votre taille a bien été mise à jour. /n";
	}
}
if(!empty($_POST['DateDeNaissance'])){
	$DateDeNaissance=$_POST['DateDeNaissance'];
	
	$req=modificationInformationUtilisateur($db, $DateDeNaissance, 'DateDeNaissance', $idUser);
	if($resultat!=""){
		$resultat .="-Votre date de naissance a bien été mise à jour.";
	}
}

include_once('Vues/Profil.vue.php');
?>

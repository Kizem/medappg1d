
<?php

$pseudo = htmlspecialchars($_POST['login']);
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$mail = htmlspecialchars($_POST['mail']);
$mdp1 = htmlspecialchars($_POST['motDePasse']);
$mdp2 = htmlspecialchars($_POST['confirmMDP']);
$typeUtilisateur = htmlspecialchars($_POST['listeDeroulante']);
$codeInscription = htmlspecialchars($_POST['codeInscription']);
if(!empty($_POST['login']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND 
	!empty($_POST['motDePasse']) AND !empty($_POST['confirmMDP']) AND !empty($_POST['codeInscription']) AND 
	($_POST['listeDeroulante']!=0)){
	echo $_POST['listeDeroulante'];

}
else{
	echo "Veuillez remplir tous les champs";
	/*echo 'Votre nom est '.$_POST['nom'];
}
}
else{
	echo 'nom pas declare';*/
}
include_once('Vues/Inscription.vue.php');
?>


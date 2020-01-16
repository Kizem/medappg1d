<?php
require("Modeles/fonction.php");
require("includes/AccesBase.php");
$erreur="";
$pseudo=$_SESSION['login'];
if(empty($_SESSION)){
	include('Vues/connexion.vue.php');
}
else{
	if(!empty($_POST)){
		if($pseudo==$_POST['login']){
			$code=$_POST['Code'];
			$req = $db->prepare("SELECT * FROM test WHERE Code='$code' ");
			$req->execute();
			if($req->rowCount() == 0){
				
				$erreur='Code de test inconnu';
			}
			else{
				$resultat='Vous pouvez réaliser le test';
			}
		}
		else{
			$erreur='Vous n\'avez pas le droit de participer à ce test';
		}

	}
	include('Vues/participerTest.vue.php');
}
?>
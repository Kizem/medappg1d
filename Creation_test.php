<?php
/*
session_test.php

Page de session test du site. Affichage des differents test et valeurs a rentrer pour effectuer ces tests.
*/
$erreur;
$date;
$heure;
$Pseudo;
$Capteur;
if(!empty($_POST)){
	$date=$_POST['Date'];
	$heure=$_POST['heure'];
	$Pseudo=$_POST['Pseudo'];
	$Capteur=$_POST['Capteur'];
	$erreur='cetsbon';
	}
else{
	include_once('Vues/Creation_test.vue.php');
}

?>
<?php
require("Modeles/fonction.php");
require("includes/AccesBase.php");

if(!empty($_POST['ML']) AND !empty($_POST['CGU'])){
	$CGU=nl2br($_POST['CGU']);
	$ML=nl2br($_POST['ML']);
	$req=ecrireCGU($db,'1',$CGU,$ML);
	include_once('Vues/CGUMentionLegales.vue.php');
}
else{
	include_once('Vues/CGUMentionLegalesEdition.vue.php');
}

?>

<?php
if(isset($_GET['nom'])){
	echo 'Votre nom est '.$_GET['nom'];
}
else{
	include("Vues/Inscription.vue.php");
}
include_once('Vues/Inscription.vue.php');
?>


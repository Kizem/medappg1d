
<?php
if(isset($_POST['nom'])){
	echo 'Votre nom est '.$_POST['nom'];
}
else{
	echo 'nom pas declare';
}
include_once('Vues/Inscription.vue.php');
?>


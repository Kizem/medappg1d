<?php 
require("Modeles/fonction.php");
require("includes/AccesBase.php");

if(isset($_POST['Theme1']) && !empty($_POST['Theme1'])){
	$id = 1;
	$rep = changerNomTheme($db, $_POST['Theme1'], $id);
	include_once('Vues/Edition_FAQ.vue.php');
}

elseif (isset($_POST['Theme2']) && !empty($_POST['Theme2'])) {
	$id = 2;
	$rep = changerNomTheme($db, $_POST['Theme2'], $id);
	include_once('Vues/Edition_FAQ.vue.php');
}

elseif (isset($_POST['Theme3']) && !empty($_POST['Theme3'])) {
	$id = 3;
	$rep = changerNomTheme($db, $_POST['Theme3'], $id);
	include_once('Vues/Edition_FAQ.vue.php');
}

else{

	echo '<form action="index.php" method="get">
			Question :  <textarea name="ML" rows="1" cols="70" required></textarea></br>
			Réponse :  <textarea name="ML" rows="10" cols="70" required></textarea></br>
			<input type="hidden" name="id" value="<?php echo $id; ?>"/>
			<input type="hidden" name="action" value="save"/>
			<input type="submit"/>
		</form>';

	

	include_once('Vues/Edition_FAQ.vue.php');
}




?>
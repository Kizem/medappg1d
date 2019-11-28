<!DOCTYPE HTML>
<html>
	<head>
		<title>Liste des utilisateurs</title>
	</head>
	<body>
/* ici tu vas caler tout ton code php pour les différentes instructions php que tu veux mettre en place pour l'inscription */

<p> Bonjour </p>

<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_POST['prenom']; ?> !</p>

<p>Si tu veux changer de prénom, <a href="Vues/Inscription.vue.php">clique ici</a> pour revenir à la page formulaire.php.</p>

include_once('Vues/Inscription.vue.php');
?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="design/Messagerie.css">
  		<title>Messagerie interne</title>
  	</head>

  	<body>
  		<header><?php include_once('includes/header.php'); ?></header>

  		<form action="affichageMessage.php" method="post">
  			<input type="submit" name="submit" value="Voir vos messages">
  		</form>

		</br>
		</br>
		</br>

		<form action="EnvoieMessage.php" method="post">
      		<input type="text" name="destinataire" placeholder="Pseudonyme du destinataire"></br>
      		<textarea name="message" rows="10" cols="70" placeholder="Votre message . . ."></textarea></br>
      		<input type="submit" name="submit" value="Envoyer">
    	</form>

    	</br>
    	</br>

    	<?php 
    	ini_set('display_errors', 'off');
    	echo $rep;
    	?>

  		<footer><?php include_once('includes/footer.php'); ?></footer>
  	</body>
</html>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="design/Messagerie.css">
  	<title>Messagerie interne</title>
  </head>

  <body>
  	<header><?php include_once('includes/header.php'); ?></header>

  	<h2>Vos Messages</h2>

  	<div>
		  <table style="width:80%">
				
	    <thead>
			  <tr>
  			  <th>Expéditeur</th>
     		  <th>Message</th>
  			  <th>Date</th>
  		  </tr>
  	  </thead>

  	  <tbody>
  		  <?php
  			  for ($i=0; $i < count($messagesUtilisateur); $i++) { 
  			  echo "<tr>";
  			  echo "<td>";
  			  echo $messagesUtilisateur[$i]['MailExpediteur'], ' ';
  			  echo "</td>";
  			  echo "<td>";
  			  echo $messagesUtilisateur[$i]['contenu'], ' ';
  			  echo "</td>";
  			  echo "<td>";
  			  echo $messagesUtilisateur[$i]['Date'], ' ';
  			  echo "</td>";
  			  echo "</tr>";
  			  }
  		  ?>
  	  </tbody>
  				
	    </table>
		</div>

		</br>
		</br>
		</br>

    <form action="Messagerie.php" method="post">
      <input type="submit" name="submit" value="Envoyer un message">
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
<!DOCTYPE HTML>
<html>
	<head>
		<title>Résultat de la recherche</title>
	</head>
		<header><?php include_once('includes/header.php'); ?></header>
	<body>

		<h2>Résultat de la recherche :<br/></h2>

		<div>
			<table style="width:80%">
				<!--
				<tr>
    				<th>Nom</th>
    				<th>Prénom</th>
  				</tr>
  				-->

  				<?php 
  				if (count($fonction) > 0) {
  					for ($i=0; $i < count($fonction); $i++) {
  						echo $fonction[$i]['Nom'], ' ';
  						echo $fonction[$i]['Prenom'], ' ',"<br>";
  					}
  				}
  				else{
  					echo "Pas d'utilisateurs";
  				}
  				

  				?>
  				<!--
  				<tr>
  					<th> <?php echo $fonction[0]['Nom']; ?> </th>
  					<th> <?php echo $fonction[0]['Prenom']; ?> </th>
  				</tr>
  				-->
  				
			</table>
		</div>



		<footer><?php include_once('includes/footer.php'); ?></footer>
	</body>
</html>
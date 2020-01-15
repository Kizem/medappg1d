<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="design/resultat_recherche.css">
		<title>Résultat de la recherche</title>
	</head>
		<header><?php include_once('includes/header.php'); ?></header>
	<body>

		<h2>Résultat de la recherche :<br/></h2>

		<div>
			<table style="width:80%">
				
				<thead>
				<tr>
    				<th>Nom</th>
    				<th>Prénom</th>
            <th>Pseudo</th>
    				<th>Mail</th>
  				</tr>
  				</thead>
  				
  				<tbody>
  				<?php 
  				if (count($fonction) > 0) {
  					for ($i=0; $i < count($fonction); $i++) {
  						echo "<tr>";
  						echo "<td>";
  						echo $fonction[$i]['Nom'], ' ';
  						echo "</td>";
  						echo "<td>";
  						echo $fonction[$i]['Prenom'], ' ';
  						echo "</td>";
  						echo "<td>";

              // echo '<a class="link_profil" href="Profil.php">'.$fonction[$i]['login'].'</a>';

              echo $fonction[$i]['login'], ' ';
              echo "</td>";
              echo "<td>";
  						echo $fonction[$i]['Mail'], ' ',"<br>";
  						echo "</td>";
  						echo "</tr>";
  					}
  				}
  				else{
  					echo "Aucun utilisateurs trouvés.";
  				}
  				?>
  				</tbody>
  				
			</table>
		</div>
		<footer><?php include_once('includes/footer.php'); ?></footer>
	</body>
</html>
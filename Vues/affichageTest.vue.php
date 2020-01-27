<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="design/resultat_recherche.css">
		<title>Résultat de la recherche</title>
	</head>
		<header><?php include_once('includes/header.php'); ?></header>
	<body>

		<h2 class="TitrePage">Résultat de la recherche :<br/></h2>
    <div class="boxtotale">
  		<div class="ConteneurTable">
  			<table style="width:80%">
  				
  				<thead>
  				<tr>
      				<th>Nom</th>
      				<th>Prénom</th>
      				<th>Date</th>
              <th>Type de test</th>
              <th>Boitier</th>
              <th>Code</th>
              <th>Score</th>
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
    						echo $fonction[$i]['Date'], ' ';
    						echo "</td>";
                echo "<td>";
                echo $fonction[$i]['Type'], ' ';
                echo "</td>";
                echo "<td>";
                echo $fonction[$i]['idBoitier'], ' ';
                echo "</td>";
                echo "<td>";
                echo $fonction[$i]['Code'], ' ';
                echo "</td>";
                echo "<td>";
                if(!empty($fonction[$i]['Score'])){
                  echo $fonction[$i]['Score'], ' ',"<br>";
                }
                else{
                  echo "", ' ',"<br>";
                }
                
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
    </div>
	</body>
</html>
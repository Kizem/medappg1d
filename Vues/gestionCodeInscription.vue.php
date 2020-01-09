<!DOCTYPE HTML>
<html>
	<head>
        <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="design/resultat_recherche.css"> 
		<title>Page gestion code</title>
	</head>
    
	<body>
		<!-- ENTETE -->
        <header><?php include_once('includes/header.php'); ?></header>
        <!--corp-->
        
        
       <div>
			<table style="width:80%">
				
				<thead>
				<tr>
    				<th>Code</th>
  				</tr>
  				</thead>
  				
  				<tbody>
  				<?php 
  				if (count($fonction) > 0) {
  					for ($i=0; $i < count($fonction); $i++) {
  						echo "<tr>";
  						echo "<td>";
  						echo $fonction[$i]['code'], ' ';
              echo "</td>";
              echo "<td>";
              echo '<a class="lienSupp" href="gestionCodeInscription.php?action=supprimer&id='.$fonction[$i]["idCodeInscription"].'">supprimer</a>';
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
    <a class="Ajouter"href="gestionCodeInscription.php?action=ajouter"> ajouter </a>

	</body>
</html>
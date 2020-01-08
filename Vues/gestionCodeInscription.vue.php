<!DOCTYPE HTML>
<html>
	<head>
        <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="design/Utilisateur.css"> 
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
    				<th>Entite</th>
  				</tr>
  				</thead>
  				
  				<tbody>
  				<?php 
  				if (count($fonction) > 0) {
  					for ($i=0; $i < count($fonction); $i++) {
  						echo "<tr>";
  						echo "<td>";
  						echo $fonction[$i]['Code'], ' ';
  						
			            echo $fonction[$i]['Nom'], ' ',"<br>";
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

	</body>
</html>
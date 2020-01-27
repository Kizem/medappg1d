<!DOCTYPE HTML>
<html lang = "fr">
<head>
	
	<link rel="stylesheet" type="text/css" href="design/graphique.css"> 
	<meta charset = "utf-8" />
	<title>Mes données</title>
</head>
<body>
	<header><?php include_once('includes/header.php'); ?></header>
	<div class="topnav">
		  <a class="active" href="#home">Graphiques</a>
		  <a href=<?php echo "Utilisateur.php?user=".$_GET['user'];?>>Tableaux</a>
		</div>
	<div class="conteneur">
		<div class="Titre">
			<h2>Résultats des tests</h2>
		</div>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	   	<script type="text/javascript" src="graphique.js"></script>
	   	<!--boucle for qui permet de créer autant de graphique qu'il y a de type de test -->
	    <?php  
	    for($i=0;$i<count($ListeDef);$i++){
	    	?>
		    <div id=<?php echo "chart_div".$i ?>></div>
		    <div class="infoDonnee"id=<?php echo "infoDonnee".$i ?>></div>
		    <script type="text/javascript">
    		var x = <?php echo json_encode($ListeDef[$i]);?>;
    		tracerGraphique(<?php echo json_encode(convertDataToChartForm($ListeALL[$i]));?>,x ,document.getElementById("infoDonnee"+<?php echo json_encode($i) ;?>), <?php echo json_encode($i) ;?>);
    		</script>
    		<<?php 
    		}
    		 ?>
	</div>
	<footer><?php include_once('includes/footer.php'); ?></footer>
</body>
</html>
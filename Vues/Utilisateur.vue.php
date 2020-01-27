<!DOCTYPE HTML>
<html>
	<head>
        <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="design/Utilisateur.css"> 
		<title>Page Utilisateur</title>
	</head>
    
	<body>
		<!-- ENTETE -->
        <header><?php include_once('includes/header.php'); ?></header>
        <!--corp-->
		<div class="topnav">
		  <a class="active" href="#home">Tableaux</a>
		  <a href=<?php echo "graphique.php?user=".$_GET['user'];?>>Graphiques</a>
		</div>
	   <?php $id = $_GET['user'];
	   tableauTestFinale($db,$id);
	   ?>
	   
        <!-- FOOTER -->
        <footer><?php include_once('includes/footer.php');?>
	</body>
</html>
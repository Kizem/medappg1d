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
       <?php tableauTestTemperature($db);tableauTestPerception($db);tableauTestFrequence($db) ?>
        <!-- FOOTER -->
        <footer><?php include_once('includes/footer.php');?>
	</body>
</html>

<link rel="stylesheet" type="text/css" href="design/header.css">

<!--php car il faudra intégrer un affichage selon que la personne est connectée ou non -->
<div class="top_header">
	<a href="index.php"><img class="logo" src="ressources/logo_provisoire.png"></a>
	<div class="center">
		<div class="h_title" >
		  <div>
		    <h1 class="slogan"> Easy stats for everyone </h1>
		  </div>
		</div>
	</div>

	<div class = "co_ins">
	  <ul>
	       <?php 
            if (empty($_SESSION['login'])){
              echo '<a class="at_coins" href="connexion.php">Connexion </a>
                    <a class="at_coins" href="Inscription.php">Inscription</a>';
            }
            else{
                echo '<a class="at_coins" href="Profil.php">'.$_SESSION['login'].'</a>
                      <a class="at_coins" href="deconnex.php">deconnexion</a>';
            }
            ?>
	  </ul>
	</div>
</div>

<div class="low_header">

	<ul class="menu">
	  <li class="limenu"><a class="title_menu" href="index.php">Accueil</a></li>
	  <li class="limenu"><a href="Profil.php">Mon profil</a></li>
	  <li class="limenu"><a href="session_test.php">Nos tests</a></li>
	  <li class="limenu"><a href="monEspace.php">Mon espace</a></li>
	  <?php if(!empty($_SESSION)) {
	  			if($_SESSION['Type']=='Utilisateur'){
	  	?>
	  <li class="limenu"><a href="participerTest.php">Participer à un test</a></li>
	  <?php } else{?><li class="limenu"><a href="FAQ.php#ancre_contact">Nous contacter</a></li>
	  
	 	<?php } } else {?><li class="limenu"><a href="FAQ.php#ancre_contact">Nous contacter</a></li>

		<?php }?>
	  <li class="limenu"><a href="FAQ.php#ancre_propos">A propos</a></li>
	</ul>

</div>
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
                echo '<a class="at_coins" href="connex.php">id:'.$_SESSION['login'].'</a>
                      <a class="at_coins" href="deconnex.php">deconnexion</a>';
            }
            ?>
	  </ul>
	</div>
</div>

<div class="low_header">

	<ul class="menu">
	  <li class="limenu"><a class="title_menu" href="index.php">Accueil</a></li>
	  <li class="limenu"><a href="#news">News</a></li>
	  <li class="limenu"><a href="session_test.php">Nos tests</a></li>
	  <li class="limenu"><a href="Utilisateur.php">Mon espace</a></li>
	  <li class="limenu"><a href="#do_test">Participer à un test</a></li>
	  <li class="limenu"><a href="#a_propos">A propos</a></li>
	</ul>

</div>
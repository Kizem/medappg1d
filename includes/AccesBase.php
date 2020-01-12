<?php
	if(!isset($_SESSION)){ //si aucune session n'est en cours
		session_start();
	}
	

	try {
		//Le PDO nous permet d'éviter les injections sql de premier ordre
			$db = new PDO("mysql:host=localhost;dbname=app","root","");//accès à la base de donnée
			$db->exec('SET NAMES utf8');
		}
		catch (Exception $e) {
			echo $e;
			die ("Erreur: Connexion à la base impossible");
		}

			?>
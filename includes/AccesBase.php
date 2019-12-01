<?php
	try {
			$db = new PDO("mysql:host=localhost;dbname=app","root","");//accès à la base de donnée
			$db->exec('SET NAMES utf8');
		}
		catch (Exception $e) {
			echo $e;
			die ("Erreur: Connexion à la base impossible");
		}

			?>
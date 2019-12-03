<?php
// faire un if avec un bouton pour rediriger vers la page de connexion
// session_start();
include_once("includes/AccesBase.php");

$reponse = $db->query('SELECT * FROM utilisateur');
$donnees = $reponse->fetch();



include_once('Vues/Utilisateur.vue.php');
?>
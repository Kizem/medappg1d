<?php

require("Modeles/fonction.php");
require("includes/AccesBase.php");

echo $_SESSION['login'];

//$idUser = recupid($db, $_SESSION['login']);
//echo $idUser;

//$fonction = affichageMessage($db, $idUser);
//$messagesUtilisateur = $fonction->fetchall();

include_once('Vues/affichageMessage.vue.php');

?>
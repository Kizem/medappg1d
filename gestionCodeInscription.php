<?php

include_once('includes/AccesBase.php');
include_once('Modeles/fonction.php');

$rep = getCodeEntite($db);
$fonction = $rep->fetchall();

include_once('Vues/gestionCodeInscription.vue.php');
?>
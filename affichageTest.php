<?php 

require_once("includes/AccesBase.php");
require_once("Modeles/fonction.php");

$rep = getTest($db);
$fonction = $rep->fetchall();

include('Vues/affichageTest.vue.php');

?>
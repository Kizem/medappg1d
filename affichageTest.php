<?php 

require("includes/AccesBase.php");
require("Modeles/fonction.php");




$rep = getTest($db);
$fonction = $rep->fetchall();
include('Vues/affichageTest.vue.php');

?>
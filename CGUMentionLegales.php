<?php
require("Modeles/fonction.php");
require("includes/AccesBase.php");
$req=lireCGU($db,'1');
$donnee=$req->fetch();
$ML=$donnee["MentionLegales"];
$CGU=$donnee["CGU"];
include_once('Vues/CGUMentionLegales.vue.php');
?>
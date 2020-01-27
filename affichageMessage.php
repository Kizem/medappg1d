<?php

require("Modeles/fonction.php");
require("includes/AccesBase.php");

$fonction = affichageMessage($db, $destinataire);
$messagesDestiantaire = $fonction->fetchall();

?>
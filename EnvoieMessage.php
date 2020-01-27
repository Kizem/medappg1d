<?php

require("Modeles/fonction.php");
require("includes/AccesBase.php");

ini_set('display_errors', 'off');

    if(isset($_POST['submit']))
    {
      $destinataire = $_POST['destinataire'];
      $message = $_POST['message'];

      $donnees = chercheDestinataire($db, $destinataire);

      if(!$donnees)
      {
      	$rep = "Identifiant introuvable";
      	include_once('Vues/Messagerie.vue.php');
      }
      elseif($donnees)
      {
      	$datetime = date("Y-m-d H:i:s");
        envoieMessage($db, $datetime, $message, $donnees);
        $rep = "Message envoyé!";
        include_once('Vues/Messagerie.vue.php');
      }
      else
      {
      	$rep = "Une erreur est survenue.";
      	include_once('Vues/Messagerie.vue.php');
      }
    }
?>
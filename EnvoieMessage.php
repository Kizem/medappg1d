<?php

require("Modeles/fonction.php");
require("includes/AccesBase.php");

    if(isset($_POST['submit']))
    {
      $destinataire = $_POST['destinataire'];
      $message = $_POST['message'];

      $donnees = chercheDestinataire($db, $destinataire);

      if(!$donnees)
      {
        echo "Identifiant introuvable";
        include_once('Vues/Messagerie.vue.php');
      }
      elseif($donnees)
      {
        envoieMessage($db, $date, $Heure, $message, $donnees);
        echo "Message envoyé!";
        include_once('Vues/Messagerie.vue.php');
      }
      else
      {
        echo "Une erreur est survenue.";
        include_once('Vues/Messagerie.vue.php');
      }
    }

?>
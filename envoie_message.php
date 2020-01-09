<?php

require("includes/AccesBase.php");
require("Modeles/fonction.php");

    if(isset($_POST['submit']))
    {
      $destinataire = $_POST['destinataire'];
      $message = $_POST['message'];

      $donnees = chercheDestinataire($db, $destinataire);

      if(!$donnees)
      {
        echo "Identifiant introuvable";
      }
      elseif($donnees)
      {
        envoieMessage($db, $date, $Heure, $message, $donnees);
        echo "Message envoyé!";
      }
      else
      {
        echo "Une erreur est survenue.";
      }
    }

?>
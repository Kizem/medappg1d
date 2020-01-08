<?php
/*
index.php

Page d'acceuil du site. Affichage des 4 derniers cours mis en ligne.
*/

include_once('Vues/FAQ.vue.php');

$to = "MedAppG1D@gmail.com";
$subject = $_POST['subject'];
$message = $_POST['message'];


$from = $_POST['from'];

$headers = "From: $from";

//$from = $_POST['from'];

//$message = $_POST['message'];

//$body = "this is an automated message. Please do not reply to this email. \n\n $message";
//$headers = "From: $from";

mail($to, $subject, $message, $headers);
?>

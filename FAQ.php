<?php
/*
index.php

Page d'acceuil du site. Affichage des 4 derniers cours mis en ligne.
*/

include_once('Vues/FAQ.vue.php');








//$from = $_POST['from'];

//$message = $_POST['message'];

//$body = "this is an automated message. Please do not reply to this email. \n\n $message";
//$headers = "From: $from";
if(!empty($_POST)){
	$to = "MedAppG1D@gmail.com";
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$headers = "From: yourwebsite@app.fr";
	mail($to, $subject, $message, $headers);
}

?>

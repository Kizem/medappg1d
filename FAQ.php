<?php

include_once('Vues/FAQ.vue.php');

if(!empty($_POST)){
	$to = "MedAppG1D@gmail.com";
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$headers = $_POST;['from'];
	mail($to, $subject, $message, $headers);
}

?>

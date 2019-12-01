<?php  
function insertUsers($db, $nom , $prenom, $mail, $mdp, $type, $pseudo){
	$req = $db->prepare("insert into utilisateur (Type,login,Mdp,Nom,Prenom,Adresse) values ('$type','$pseudo','$mdp','$nom','$prenom','$mail')");
	$req->execute();
	
	return $req;
}
?>
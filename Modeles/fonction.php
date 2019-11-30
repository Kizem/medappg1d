<?php  
function insertUsers($db, $nom , $prenom, $mail, $mdp, $type, $pseudo){
	$req = $db->prepare("INSERT INTO `utilisateur`(`Type`, `login`, `Mdp`, `Nom`, `Prenom`, `Adresse`) VALUES($type,$login,$mdp,$nom,$prenom,$mail)");
	$req->execute();
	return $req;
}

?>
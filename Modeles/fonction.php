<?php  
function insertUsers($db, $nom , $prenom, $mail, $mdp, $type, $pseudo){
	$req = $db->prepare("insert into utilisateur (Type,login,Mdp,Nom,Prenom,Mail) values ('$type','$pseudo','$mdp','$nom','$prenom','$mail')");
	$req->execute();
	
	return $req;
}

function mailDisponible($db, $mail){
	$req = $db->prepare("SELECT * FROM utilisateur WHERE Mail='$mail'");
	$req->execute();
	if($req->rowCount() == 0){
		return TRUE;
	}
	else{
		return FALSE;
	}
}

function pseudoDisponible($db, $pseudo){
	$req = $db->prepare("SELECT * FROM utilisateur WHERE login='$pseudo'");
	$req->execute();
	if($req->rowCount() == 0){
		return TRUE;
	}
	else{
		return FALSE;
	}
	
}
function detectionCode($db, $code){
	$req = $db->prepare("SELECT * FROM codeInscription WHERE id='$code'");
	$req->execute();
	return $req;
}

function lireCGU($db, $id){
	$req = $db->prepare("SELECT * FROM cgu WHERE idCGU='$id'");
	$req->execute();
	return $req;
}

function ecrireCGU($db, $id,$CGU,$ML){
	$CGU=addslashes($CGU);
	$ML=addslashes($ML);
	$req = $db->prepare("UPDATE `cgu` SET `idCGU`='$id',`MentionLegales`='$ML',`CGU`='$CGU'");
	$req->execute();
	return $req;
}

function rechercheUtilisateur($db, $keyword){
	$req = $db->prepare("SELECT * FROM utilisateur WHERE Nom LIKE '%$keyword%' OR Prenom LIKE '%$keyword%' ORDER BY Nom");
	$req->execute();
	return $req;
}

function modificationInformationUtilisateur($db, $nouvelleInfo, $info, $id){
	$req = $db->prepare("UPDATE `utilisateur` SET $info='$nouvelleInfo' WHERE idUser='$id'");
	$req->execute();
	return $req;
	
}
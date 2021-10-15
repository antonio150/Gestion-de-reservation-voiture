<?php 

require_once(realpath(dirname(__FILE__)) . '/../../modele/Connexion/Connexion.php');
require_once(realpath(dirname(__FILE__)) . '/../../modele/Gere.classe.php');

class RolesDAO extends Connexion{
	public static function listData(){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * FROM chauffeur order by idChauff");
		

		return $cont;
	}

	public static function oneData($id){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * FROM chauffeur where idChauff = $id");
		
		return $cont;
	}

	public static function surnomData($surnomChauff){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * from chauffeur where surnomChauff='$surnomChauff'");
		return $cont;
	}

	public static function authentif_Chauffeur($surnomc,$motpassc){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * from chauffeur where surnomChauff='$surnomc' and motpassChauff='$motpassc'");
		

		return $cont;
	}

	public static function recherche_chauffeur($recherche)
	{
		$con = new Connexion();
		$cont = $con->consulter("SELECT * from chauffeur where prenomChauff LIKE '%$recherche%' or nomChauff LIKE '%$recherche%'");

		return$cont;
	}

	public static function insertData($rol){
		$con = new Connexion();
		$con->actualiser("INSERT INTO chauffeur(nomChauff,prenomChauff,surnomChauff,motpassChauff) VALUES('$rol->nomChauff', '$rol->prenomChauff', '$rol->surnomChauff', '$rol->motpass') ");
		
		$con->actualiser("INSERT INTO chauffeur2(nomChauff,prenomChauff,surnomChauff,motpassChauff) VALUES('$rol->nomChauff', '$rol->prenomChauff', '$rol->surnomChauff', '$rol->motpass') ");
	}

	public static function editData($rol){
		$con = new Connexion();
		$con->actualiser("UPDATE chauffeur set nomChauff='$rol->nomChauff', prenomChauff='$rol->prenomChauff', surnomChauff='$rol->surnomChauff', motpassChauff='$rol->motpass' where idChauff=$rol->idChauff ");

		$con->actualiser("UPDATE chauffeur2 set nomChauff='$rol->nomChauff', prenomChauff='$rol->prenomChauff', surnomChauff='$rol->surnomChauff', motpassChauff='$rol->motpass' where idChauff=$rol->idChauff ");
	
	}

	public static function deleteData($id){
		$con = new Connexion();
		$con->actualiser("DELETE FROM chauffeur where idChauff=$id");
		
	}


}




 ?>
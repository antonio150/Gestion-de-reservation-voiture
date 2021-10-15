<?php 

require_once(realpath(dirname(__FILE__)) . '/../../modele/Connexion/Connexion.php');

require_once(realpath(dirname(__FILE__)) . '/../../modele/gereDem.class.php');



class Demandeur_RolesDAO extends Connexion{
	public static function listData(){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * FROM demandeur order by numDemand");
		

		return $cont;
	}

	public static function oneData($id){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * FROM demandeur where numDemand = $id");
		

		return $cont;
	}

	public static function findData($surnom){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * FROM demandeur where surnomDem = '$surnom'");
		

 		return $cont;
	}

	public static function recherche_data($recherche){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * from demandeur where prenomDem LIKE '%$recherche%' or nomDem LIKE '%$recherche%'");

		return $cont;
	}

	public static function authentif_Demandeur($surnomd,$motpassd){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * from demandeur where surnomDem='$surnomd' and motpassDem='$motpassd'");
		
	
		return $cont;
	}

	public static function insertData($rol){
		$con = new Connexion();
		$con->actualiser("INSERT INTO demandeur(nomDem,prenomDem,surnomDem,motpassDem) VALUES('$rol->nomDem', '$rol->prenomDem', '$rol->surnomDem', '$rol->motpass') ");
		
		$con->actualiser("INSERT INTO demandeur2(nomDem,prenomDem,surnomDem,motpassDem) VALUES('$rol->nomDem', '$rol->prenomDem', '$rol->surnomDem', '$rol->motpass') ");
	}

	public static function editData($rol){
		$con = new Connexion();
		$con->actualiser("UPDATE demandeur set nomDem='$rol->nomDem', prenomDem='$rol->prenomDem', surnomDem='$rol->surnomDem', motpassDem='$rol->motpass' where numDemand=$rol->numDemand ");
	
	}

	public static function deleteData($id){
		$con = new Connexion();
		$con->actualiser("DELETE FROM demandeur where numDemand=$id");
		
	}
}




 ?>
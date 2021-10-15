<?php 

require_once(realpath(dirname(__FILE__)) . '/../../modele/Connexion/Connexion.php');
require_once(realpath(dirname(__FILE__)) . '/../../modele/gereLieu.class.php');

class lieu_RolesDAO extends Connexion{
	public static function listData(){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * FROM lieu");
		

		return $cont;
	}

	public static function oneData($id){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * FROM lieu where idLieu = $id");
		

		return $cont;
	}

	public static function findData($nom)
	{
		$con = new Connexion();
		$cont = $con->consulter("SELECT * FROM lieu where lieuArriv = '$nom'");

		return $cont;
	}

	public static function insertData($idLieu){
		$con = new Connexion();
		$con->actualiser("INSERT INTO lieu(lieuArriv) VALUES('$idLieu') ");
		
		$con->actualiser("INSERT INTO lieu2(lieuArriv) VALUES('$idLieu') ");
	}

	public static function editData($rol){
		$con = new Connexion();
		$con->actualiser("UPDATE lieu set lieuArriv='$rol->lieuArriv' where idLieu=$rol->idLieu ");

		
	}

	public static function deleteData($id){
		$con = new Connexion();
		$con->actualiser("DELETE FROM lieu where idLieu=$id");
		
	}

	public static function emptyData()
	{
		$con = new Connexion();
		$con->actualiser("DELETE FROM lieu ");
	}


}




 ?>
<?php 

require_once(realpath(dirname(__FILE__)) . '/../../modele/Connexion/Connexion.php');
require_once(realpath(dirname(__FILE__)) . '/../../modele/gereVehicule.class.php');

class Vehicule_RolesDAO extends Connexion{
	public static function listData(){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * FROM vehicule");
		

		return $cont;
	}

	public static function oneData($id){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * FROM vehicule where idVehicule = $id");
		

		return $cont;
	}

	public static function findData($num){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * FROM vehicule where numVehicule = '$num'");

 		return $cont;
	}

	public static function insertData($rol){
		$con = new Connexion();
		$con->actualiser("INSERT INTO vehicule(numVehicule,type,marque) VALUES('$rol->numVehicule', '$rol->type', '$rol->marque') ");

	}

	public static function editData($rol){
		$con = new Connexion();
		$con->actualiser("UPDATE vehicule set numVehicule='$rol->numVehicule', type='$rol->type', marque='$rol->marque' where idVehicule=$rol->idVehicule ");
		
		
	}

	public static function deleteData($id){
		$con = new Connexion();
		$con->actualiser("DELETE FROM vehicule where idVehicule=$id");
		
	}


}




 ?>
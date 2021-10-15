<?php 

require_once(realpath(dirname(__FILE__)) . '/../../modele/Connexion/Connexion.php');
require_once(realpath(dirname(__FILE__)) . '/../../modele/gereDuree.class.php');

class Duree_RolesDAO extends Connexion{
	public static function listData(){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * FROM duree");
		

		return $cont;
	}

	public static function oneData($id){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * FROM duree where idDuree = $id");
		

		return $cont;
	}

	public static function insertData($idduree1,$idduree2){
		$con = new Connexion();
		$con->actualiser("INSERT into duree(tempDepar,tempArriv) values('$idduree1','$idduree2')");	

		$con->actualiser("INSERT into duree2(tempDepar,tempArriv) values('$idduree1','$idduree2')");	
		
	}

	public static function deleteData($id)
	{
		$con = new Connexion();
		$con->actualiser("DELETE FROM duree WHERE idDuree = $id ");	
	}

	
}




 ?>
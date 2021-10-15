<?php 

require_once(realpath(dirname(__FILE__)) . '/../../modele/Connexion/Connexion.php');
require_once(realpath(dirname(__FILE__)) . '/../../modele/gereAdmin.class.php');

class admin_RolesDAO extends Connexion{
	
	public static function oneData($mdp1){
		$con = new Connexion();
		$cont=$con->consulter("SELECT * from admin where motpass_admin='$mdp1'");
		return $cont; 
	}

	public static function editData($num,$sunom,$mdp2){
		$con = new Connexion();
		$con->actualiser("UPDATE admin set  surnom_admin='$sunom', motpass_admin='$mdp2' where idAdmin=$num ");

	}

	public static function authentif_Admin($surnom,$motpass){
		$con = new Connexion();
		$cont=$con->consulter("SELECT * from admin where surnom_admin='$surnom' and motpass_admin='$motpass'");

		
		return $cont;
	}


}




 ?>
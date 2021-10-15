<?php 

require_once(realpath(dirname(__FILE__)) . '/../../modele/Connexion/Connexion.php');
require_once(realpath(dirname(__FILE__)) . '/../../modele/gereTablenow.class.php');

class tablenow_RolesDAO extends Connexion{
	public static function listData(){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * FROM tablenow order by id_tablenow");
		

		return $cont;
	}

	public static function oneData($id){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * FROM tablenow where id_tablenow = $id");
		

		return $cont;
	}

	public static function entre_2Date($dat1,$dat2){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * from tablenow where '$dat1' between date1 and date2 OR '$dat2' BETWEEN date1 and date2");

		return $cont;

		// echo "SELECT * from tablenow where '$dat1' between date1 and date2 OR '$dat2' BETWEEN date1 and date2";
	}

	public static function insertData($date1,$date2){
		$con = new Connexion();
		$con->actualiser("INSERT INTO tablenow(date1,date2) VALUES('$date1', '$date2') ");

	}

	

	public static function deleteData($id){
		$con = new Connexion();
		$con->actualiser("DELETE FROM tablenow where id_tablenow=$id");
		
	}

	public static function minData(){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * from tablenow WHERE date1=(SELECT min(date1) as min FROM tablenow)");
		

		return $cont;
	}


	public static function deleteData_min($daty){
		$con = new Connexion();
		$con->actualiser("DELETE from tablenow where date2<'$daty'");
		
	}

}




 ?>
<?php 
require_once(realpath(dirname(__FILE__)) . '/../../modele/Connexion/Connexion.php');
require_once(realpath(dirname(__FILE__)) . '/../../modele/geredateTable.class.php');


class dateTable_RolesDAO extends Connexion{
	public static function listData(){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * FROM dateTable order by id_datetable");
		

		return $cont;
	}

	public static function oneData($id){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * FROM dateTable where id_datetable = $id");
		

		return $cont;
	}

	public static function findData($date){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * FROM `datetable` where '$date' BETWEEN date1 AND date2");

		return $cont;
	}

	public static function insertData($daty){
		$con = new Connexion();
		$con->actualiser("INSERT into datetable (date1,date2,number) select date1,date2,id_tablenow from tablenow where date2<'$daty'");
		
	}

	public static function deleteData($id){
		$con = new Connexion();
		$con = $con->consulter("DELETE FROM `datetable` WHERE `datetable`.`number` = $id ");
	}

}




 ?>
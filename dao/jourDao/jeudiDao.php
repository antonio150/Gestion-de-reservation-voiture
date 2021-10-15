<?php 

require_once(realpath(dirname(__FILE__)) . '/../../modele/Connexion/Connexion.php');
require_once(realpath(dirname(__FILE__)) . '/../../modele/jour/gereJour.class.php');

class Jeudi_RolesDAO extends Connexion{
	public static function listData($val){
		$con = new Connexion();
		$cont = $con->consulter("SELECT * from jeudi_$val order by id_jeudi");
		

		return $cont;
	}


	public static function insertData($j,$vehicule,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15,$n16,$n17,$n18,$n19,$n20){
		$con = new Connexion();
		$con->actualiser("INSERT INTO $j(id_jeudi,vehicule,n7,n8,n9,n10,n11,n12,n13,n14,n15,n16,n17,n18,n19,n20) VALUES(''$j','$vehicule','$n7','$n8','$n9','$n10','$n11','$n12','$n13','$n14','$n15','$n16','$n17','$n18','$n19','$n20') ");
		
		
	}

	public static function deleteData($val,$id){
		$con = new Connexion();
		$con->actualiser("DELETE FROM `jeudi_$val` WHERE `n7` = '$id' or `n8` = '$id' or `n9` = '$id' or `n10` = '$id' or `n11` = '$id' or `n12` = '$id' or `n13` = '$id' or `n14` = '$id' or `n15` = '$id' or `n16` = '$id' or `n17` = '$id' or `n18` = '$id' or `n19` = '$id' or `n20` = '$id'");
		
	}

	public static function createTable($val){
		$con = new Connexion();
		$con->creer("CREATE table jeudi_$val like jeudi");
	}

	public static function dropTable($val){
		$con = new Connexion();
		$con->creer("DROP TABLE `park`.`jeudi_$val`");
	}
}




 ?>
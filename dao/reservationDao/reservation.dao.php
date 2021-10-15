<?php 

require_once(realpath(dirname(__FILE__)) . '/../../modele/Connexion/Connexion.php');
require_once(realpath(dirname(__FILE__)) . '/../../modele/gereReservation.class.php');

class reservation_RolesDAO extends Connexion{
	public static function listData($val){
		$con = new Connexion();
		$cont = $con->consulter("SELECT numRes,duree2.idDuree,demandeur2.prenomDem,demandeur2.numDemand,chauffeur2.prenomChauff,duree2.tempDepar,duree2.tempArriv,lieu2.lieuArriv,mission,remarque,fait from `reser_$val`,`demandeur2`,`chauffeur2`,`duree2`,`lieu2` where demandeur2.numDemand=reser_$val.numDemand and duree2.idDuree=reser_$val.idDuree and lieu2.idLieu=reser_$val.idLieu and chauffeur2.idChauff=reser_$val.idChauff order by numRes");

		return $cont;
	}

	public static function oneData($id,$val){
		$con = new Connexion();
		$cont = $con->consulter("SELECT numRes,demandeur2.prenomDem,demandeur2.numDemand,chauffeur2.idChauff,duree.tempDepar,duree.tempArriv,lieu2.lieuArriv,mission,remarque,fait from `reser_$val`,`demandeur2`,`chauffeur2`,`duree`,`lieu2` where demandeur2.numDemand=reser_$val.numDemand and duree.idDuree=reser_$val.idDuree and lieu2.idLieu=reser_$val.idLieu and chauffeur2.idChauff=reser_$val.idChauff and numRes='$id'");

	
		return $cont;
	}


	public static function insertData($val,$numdem1,$chauffeur,$vehicl,$temp,$idlieu1,$mission,$remarq){
		$con = new Connexion();
		$con->actualiser("INSERT into reser_$val(numDemand,idVehicule,idChauff, idDuree, idLieu, mission,remarque) values('$numdem1','$vehicl','$chauffeur', '$temp','$idlieu1','$mission','$remarq') ");

	}

	public static function deleteData($val,$id,$numd){
		$con = new Connexion();
		$con->actualiser("DELETE from reser_$val where numRes='$id' and numDemand='$numd'");
		
	}

	public static function editData($val,$v,$id){
		$con = new Connexion();
		$con->actualiser("UPDATE reser_$val set fait='$v' where numRes='$id'");

	}

	public static function createTable($val){
		$con = new Connexion();
		$con->creer("CREATE table reser_$val like reservation");
	}

	public static function dropTable($val){
		$con = new Connexion();
		$con->creer("DROP TABLE `park`.`reser_$val`");
	}


}




 ?>
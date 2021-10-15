<?php 
 


require_once '../modele/gereVehicule.class.php';
require_once '../dao/vehicule.dao.php';

$j=$_POST['jour'];
				
$numdem1=$_POST['numDema'];
$idduree1=$_POST['iduree'];
$idduree2=$_POST['iduree2'];
$idlieu1=$_POST['idlieu'];
$idlieu2=$_POST['idlieu2'];
$mission=$_POST['mission'];
$remarq=$_POST['remarque'];
$vehicl=$_POST['vehicule'];


switch ($_GET['a']) {
	case 'insert':
		$r=new GereVehicule();
		$r->numVehicule = $_POST['numVoi'];
		$r->type = $_POST['typeVoi'];
		$r->marque = $_POST['marqVoi'];
		
		Vehicule_RolesDAO::insertData($r);
		break;

	case 'update':
		$r=new GereVehicule();
		$r->idVehicule = $v;
		$r->numVehicule = $_POST['numVoi'];
		$r->type = $_POST['typeVoi'];
		$r->marque = $_POST['marqVoi'];

		Vehicule_RolesDAO::editData($r);
		break;

	case 'delete':
		Vehicule_RolesDAO::deleteData($_GET['v']);
		
		break;
	
}
echo "v = '$v' name= '$name' job = '$job'";
	 header("Location: http://localhost:8080/projet%20php/vehicule/vehicule.php?i=$id&name=$name&job=$job");



class insert_reservation
{
	
	function __construct()
	{
		
	}

	public function getVehicule(){
		$gVehicule = Vehicule_RolesDAO::oneData($r);

		return $gVehicule;
	}

	public function getLieu(){
		$gLieu = lieu_RolesDAO::oneData($r);

		return $gLieu;
	}

	public function setDuree(){
		$setDur = Duree_RolesDAO::insertData();

		return $setDur;
	}

	public function getReservation(){
		$gReservation = reservation_RolesDAO::listData();

		return $gReservation;
	}



}
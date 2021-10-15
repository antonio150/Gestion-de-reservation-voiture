<?php 
$con=mysqli_connect("localhost","root","","park");

include '../../dao/dateTableDao/dateTable.dao.php';
include '../../dao/dureeDao/duree.dao.php';
// require '../../modele/gereDuree.class.php';
include '../../dao/DemandeurDao/Demandeur.dao.php';

include '../../dao/vehiculeDao/vehicule.dao.php';
include '../../dao/lieuDao/lieu.dao.php';
include '../../dao/reservationDao/reservation.dao.php';

include '../../dao/jourDao/lundiDao.php';
include '../../dao/jourDao/mardiDao.php';
include '../../dao/jourDao/mercrediDao.php';
include '../../dao/jourDao/jeudiDao.php';
include '../../dao/jourDao/vendrediDao.php';
include '../../dao/jourDao/samediDao.php';
include '../../dao/jourDao/dimancheDao.php';

include '../../Routeur/reservation_routeur/demandeur_reservation_routeur.php';
include '../../Routeur/reservation_routeur/date_reservation.php';
require_once '../Controllers/Controller_reservation.php';

$id=$_GET['i'];
$val=$_GET['val'];
$numdem1=$_GET['numdem1'];
$idduree1=$_GET['duree1'];
$idduree2=$_GET['duree2'];
$lieu=$_GET['lieu'];
$mission=$_GET['mission'];
$remarq=$_GET['remar'];
$j=$_GET['j'];
$z=$_GET['z'];
$v1=$_GET['v1'];
$vehicule=$_GET['vehic'];
$vehicule=str_replace(' ', '', $vehicule);
$voit=$_GET['voit'];
$chauffeur=$_GET['chauffeur'];

$admin=$_GET['name'];
$job = $_GET['job'];

$table=$_GET['tab'];
$table=str_replace(' ', '', $table);
$numdem1=str_replace(' ', '', $numdem1);
$lieu=str_replace(' ', '', $lieu);
$val=str_replace(' ', '', $val);


$date1=$_GET['date1'];
$date2=$_GET['date2'];

$ctrl = new Controller_reservation();

	

$num3=0;
$num2=0;


if ($table=="reserv") {
		$ctrl->set_Duree($idduree1,$idduree2);
		foreach (Duree_RolesDAO::listData() as $dures) {
		$temp=$dures['idDuree'];
	}
	reservation_RolesDAO::insertData($val,$numdem1,$chauffeur,$vehicule,$temp,$lieu,$mission,$remarq);


	foreach (reservation_RolesDAO::listData($val) as $res3) {
		$num3=$res3['numRes'];
	}

					if($idduree1==7){
						$d=7;
					}
					elseif ($idduree1==8) {
						$d=8;
					}
					elseif ($idduree1==9) {
						$d=9;
					}
					elseif ($idduree1==10) {
						$d=10;
					}
					elseif ($idduree1==11) {
						$d=11;
					}
					elseif ($idduree1==12) {
						$d=12;
					}
					elseif ($idduree1==13) {
						$d=13;
					}
					elseif ($idduree1==14) {
						$d=14;
					}
					elseif ($idduree1==15) {
						$d=15;
					}
					elseif ($idduree1==16) {
						$d=16;
					}
					elseif ($idduree1==17) {
						$d=17;
					}
					elseif ($idduree1==18) {
						$d=18;
					}
					elseif ($idduree1==19) {
						$d=19;
					}
					elseif ($idduree1==20) {
						$d=20;
					}


					$va=null;
					$v1a=$num3;

					for ($na=$d; $na<=$idduree2; $na++) {

						if($na==$d){		
							$va=' \''.($num3).'\'' ;
						}
						else{
						    $va=($va).',\''.($num3).'\'' ;	    
					    }

					}

					

					mysqli_query($con, "INSERT INTO $j($z,vehicule) VALUES ($va ,'$voit')") ;



					header("location:../../view/reservation_view/reservation_view.php?i=$id & name=$admin & job=$job");


}else if($table=="tableModif"){
	$ctrl->set_Duree($idduree1,$idduree2);
	foreach (Duree_RolesDAO::listData() as $dures) {
		$temp=$dures['idDuree'];
	}
					
					reservation_RolesDAO::insertData($val,$numdem1,$chauffeur,$vehicule,$temp,$lieu,$mission,$remarq);


					foreach (reservation_RolesDAO::listData($val) as $res3) {
						$num3=$res3['numRes'];
					}

					

					if($idduree1==7){
						$d=7;
					}
					elseif ($idduree1==8) {
						$d=8;
					}
					elseif ($idduree1==9) {
						$d=9;
					}
					elseif ($idduree1==10) {
						$d=10;
					}
					elseif ($idduree1==11) {
						$d=11;
					}
					elseif ($idduree1==12) {
						$d=12;
					}
					elseif ($idduree1==13) {
						$d=13;
					}
					elseif ($idduree1==14) {
						$d=14;
					}
					elseif ($idduree1==15) {
						$d=15;
					}
					elseif ($idduree1==16) {
						$d=16;
					}
					elseif ($idduree1==17) {
						$d=17;
					}
					elseif ($idduree1==18) {
						$d=18;
					}
					elseif ($idduree1==19) {
						$d=19;
					}
					elseif ($idduree1==20) {
						$d=20;
					}


					$va=null;
					$v1a=$num3;

					for ($na=$d; $na<=$idduree2; $na++) {

						if($na==$d){		
							$va=' \''.($num3).'\'' ;
						}
						else{
						    $va=($va).',\''.($num3).'\'' ;	    
					    }

					}

					mysqli_query($con, "INSERT INTO $j($z,vehicule) VALUES ($va ,'$voit')") ;

					header("location:../../view/reservation_view/tableModif_view.php?i=$id&name=$admin&val=$val&job=$job&date1=$date1&date2=$date2");

							}
else if($table=="reserAdm"){
	
					$ctrl->set_Duree($idduree1,$idduree2);
					foreach (Duree_RolesDAO::listData() as $dures) {
		$temp=$dures['idDuree'];
	}
					reservation_RolesDAO::insertData($val,$numdem1,$chauffeur,$vehicule,$temp,$lieu,$mission,$remarq);

					foreach (reservation_RolesDAO::listData($val) as $res3) {
						$num3=$res3['numRes'];
					}

					if($idduree1==7){
						$d=7;
					}
					elseif ($idduree1==8) {
						$d=8;
					}
					elseif ($idduree1==9) {
						$d=9;
					}
					elseif ($idduree1==10) {
						$d=10;
					}
					elseif ($idduree1==11) {
						$d=11;
					}
					elseif ($idduree1==12) {
						$d=12;
					}
					elseif ($idduree1==13) {
						$d=13;
					}
					elseif ($idduree1==14) {
						$d=14;
					}
					elseif ($idduree1==15) {
						$d=15;
					}
					elseif ($idduree1==16) {
						$d=16;
					}
					elseif ($idduree1==17) {
						$d=17;
					}
					elseif ($idduree1==18) {
						$d=18;
					}
					elseif ($idduree1==19) {
						$d=19;
					}
					elseif ($idduree1==20) {
						$d=20;
					}


					$va=null;
					$v1a=$num3;

					for ($na=$d; $na<=$idduree2; $na++) {

						if($na==$d){		
							$va=' \''.($num3).'\'' ;
						}
						else{
						    $va=($va).',\''.($num3).'\'' ;	    
					    }

					}


					mysqli_query($con, "INSERT INTO $j($z,vehicule) VALUES ($va ,'$voit')") ;

					

					header("location:../../view/reservation_view/reserAdmin_view.php?i=$id ");


							}

 ?>
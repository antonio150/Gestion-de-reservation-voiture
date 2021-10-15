<?php 

class Valide_reservation
{

	public function verif_jour($j, $va, $n, $idduree2,$val,$val2)
	{

		$ctrl = new Controller_reservation();

		if($n<=$idduree2){
				if ($j == "lundi_$val") {
				foreach ($ctrl->get_All_Lundi($val) as $res9 ) {
					$d[$n]=$res9["$va[$n]"];

					$val2=$val2+$d[$n];
				}
			}
			elseif ($j == "mardi_$val"){
				foreach ($ctrl->get_All_Mardi($val) as $res9 ) {
					$d[$n]=$res9["$va[$n]"];

					$val2=$val2+$d[$n];
				}
			}
			elseif ($j == "mercredi_$val"){
				foreach ($ctrl->get_All_Mercredi($val) as $res9 ) {
					$d[$n]=$res9["$va[$n]"];

					$val2=$val2+$d[$n];
				}
			}
			elseif ($j == "jeudi_$val") {
				foreach ($ctrl->get_All_Jeudi($val) as $res9 ) {
					$d[$n]=$res9["$va[$n]"];

					$val2=$val2+$d[$n];
				}
			}
			elseif ($j == "vendredi_$val") {
				foreach ($ctrl->get_All_Vendredi($val) as $res9 ) {
					$d[$n]=$res9["$va[$n]"];

					$val2=$val2+$d[$n];
				}
			}
			elseif ($j == "samedi_$val") {
				foreach ($ctrl->get_All_Samedi($val) as $res9 ) {
					$d[$n]=$res9["$va[$n]"];

					$val2=$val2+$d[$n];
				}
			}
			elseif ($j == "dimanche_$val") {
				foreach ($ctrl->get_All_Dimanche($val) as $res9 ) {
					$d[$n]=$res9["$va[$n]"];

					$val2=$val2+$d[$n];
				}
			}
		}
		return $val2;
	}



public function verif_reservation($post,$val,$ver,$id,$admin,$job,$ctrl,$i)
	{

		$con=mysqli_connect("localhost","root","","park");

	if(isset($post))
		{
			$j=$_POST['jour'];
				
			$numdem1=$_POST['numDema'];
			$chauffeur=$_POST['chauffeur'];
			$idduree1=$_POST['iduree'];
			$idduree2=$_POST['iduree2'];
			$idlieu1=$_POST['idlieu'];
			$idlieu2=$_POST['idlieu2'];
			$mission=$_POST['mission'];
			$remarq=$_POST['remarque'];
			$vehicl=$_POST['vehicule'];

			if ($idduree1 > $idduree2) {
				$v=$idduree1; $idduree1=$idduree2; $idduree2=$v;
			}

			$num="";
			

			foreach ($ctrl->get_One_vehicule($vehicl) as $resve) {
				$voit=$resve['type'];			 
			} ;
			
			
			foreach ($ctrl->get_One_Lieu($idlieu2) as $restoeran) {
			 	$valieu=$restoeran['lieuArriv'];
			 } 	;	


			$tempDepar = $idduree1;
			$tempArriv = $idduree2;
			
			

			foreach ($ctrl->get_All_Reservation($val) as $res2) {
				$num=$res2['numRes'];
			}

			
	

$s = '7';
$z = $idduree1;
$y = $idduree2;
$v=$num+1;
$v1=$num;
for ($n=$z; $n<=$y; $n++) {

	if($n==$z){
		
		$z= '`n'.($n).'`' ;
		$v=' \''.($num+1).'\'' ;
		$va[$n]="n$n";
		
	}

	else{
		$va[$n]="n$n";
	 	$z= ($z).',`n'.($n).'`' ;
	    $v=($v).',\''.($num+1).'\'' ;
	    
    }
}

 $n=$idduree1;
 $d[]=null;
$val1 = 0;

	$val1 = self::verif_jour($j, $va, $n, $idduree2,$val, $val1);

$notif[] = array();


if($idlieu1==null && $idlieu2=="null"){

	$notif1 = " remplir le champ lieu ou choisissez sur lieu existant ";
}
else if($idlieu1!= null && $idlieu2!="null"){

	$ctrl->set_Duree($tempDepar,$tempArriv);

	foreach (lieu_RolesDAO::findData($idlieu1) as $value) {
		$find = $value['lieuArriv'];
		$numfind=$value['idLieu'];
	}

if ($find != null) {
	
		$idlie=$numfind;
	
}else{
	lieu_RolesDAO::insertData($idlieu1);
	foreach (lieu_RolesDAO::findData($idlieu1) as $res) {
		$idlie=$res['idLieu'];
	}
}

	if($val1!=null){				
		
		if($ver=='reser'){

			
			$notif2 =" Cet heure est déjà reservé! Voulez-vous continuer?? 
		";}
						
		elseif($ver=='reserAdm'){
			
			$notif2 = " Cet heure est déjà reservé! Voulez-vous continuer??
			";
		}

		elseif($ver=='tableModif'){
			
			$notif2 = " Cet heure est déjà reservé! Voulez-vous continuer?? 
			";
		}
		
		}
	else{
			
			foreach ($ctrl->get_All_Duree() as $dures) {
				$temp=$dures['idDuree'];
			}
			

			$ctrl->set_Reservation($val,$numdem1,$chauffeur,$vehicl,$temp,$idlie,$mission,$remarq);


			foreach ($ctrl->get_All_Reservation($val) as $res3) {
				$num3=$res3['numRes'];
			}
			for ($na=$idduree1; $na<=$idduree2; $na++) {
				if($na==$idduree1){		
					$va=' \''.($num3).'\'' ;
				}
				else{
				    $va=($va).',\''.($num3).'\'' ;	    
			    }
			}
		//$notif = "INSERT INTO `$j` ( $z,vehicule) VALUES ($va ,'$voit')";


			$que8=mysqli_query($con, "INSERT INTO `$j` ( $z,vehicule) VALUES ($va ,'$voit')") ;



			$notif3 = "  La réservation a été ajouté avec succés ";
		}
}

// --------------------------------------------------------------------------------------------------

else if($idlieu1!= null && $idlieu2=="null"){

	foreach (lieu_RolesDAO::findData($idlieu1) as $value) {
		$find = $value['lieuArriv'];
		$numfind=$value['idLieu'];
	}

if ($find != null) {
	
		$idlie=$numfind;
	
}else{
	lieu_RolesDAO::insertData($idlieu1);
	foreach (lieu_RolesDAO::findData($idlieu1) as $res) {
		$idlie=$res['idLieu'];
	}
}
	

	if($val1!=null){				
		
	if($ver=='reser'){
			
			$notif2 = " Cet heure est déjà reservé! Voulez-vous continuer?? 
		";}
						
		elseif($ver=='reserAdm'){
			
			$notif2 = " Cet heure est déjà reservé! Voulez-vous continuer?? 
			";
		}
		elseif($ver=='tableModif'){
		
			$notif2 = " Cet heure est déjà reservé! Voulez-vous continuer?? 
			";
		}
		
		
		}
		else{

			$ctrl->set_Duree($tempDepar,$tempArriv);
			
			$ctrl->set_Duree($idduree1,$idduree2);

			foreach ($ctrl->get_All_Duree() as $dures) {
				$temp=$dures['idDuree'];
			}

			
			$ctrl->set_Reservation($val,$numdem1,$chauffeur,$vehicl,$temp,$idlie,$mission,$remarq);

			
			foreach ($ctrl->get_All_Reservation($val) as $res3) {
				$num3=$res3['numRes'];
			}

			for ($na=$idduree1; $na<=$idduree2; $na++) {
				if($na==$idduree1){		
					$va=' \''.($num3).'\'' ;
				}
				else{
				    $va=($va).',\''.($num3).'\'' ;	    
			    }
			}
		$que8=mysqli_query($con, "INSERT INTO `$j` ( $z,vehicule) VALUES ($va ,'$voit')") ;

		
		$notif3 = "  La réservation a été ajouté avec succés ";
		}
}

// -------------------------------------------------------------------------------------------------

else if($idlieu1== null && $idlieu2!="null"){

	if($val1!=null){				
		

		if($ver=='reser'){
			
			$notif2 = " Cet heure est déjà reservé! Voulez-vous continuer?? 
		";}

		elseif($ver=='reserAdm'){
			
			$notif2 = " Cet heure est déjà reservé! Voulez-vous continuer?? 
			";
		}
		elseif($ver=='tableModif'){
			
			$notif2 = " Cet heure est déjà reservé! Voulez-vous continuer?? 
			";
		}
		


	}
		else{
			$ctrl->set_Duree($tempDepar,$tempArriv);
			
			$ctrl->set_Duree($idduree1,$idduree2);

			foreach ($ctrl->get_All_Duree() as $dures) {
				$temp=$dures['idDuree'];
			}

			
			$ctrl->set_Reservation($val,$numdem1,$chauffeur,$vehicl,$temp,$idlieu2,$mission,$remarq);

			
			foreach ($ctrl->get_All_Reservation($val) as $res3) {
				$num3=$res3['numRes'];
			}
			
			for ($na=$idduree1; $na<=$idduree2; $na++) {
				if($na==$idduree1){		
					$va=' \''.($num3).'\'' ;
				}
				else{
				    $va=($va).',\''.($num3).'\'' ;	    
			    }
			}
		
			$que8=mysqli_query($con, "INSERT INTO `$j` ( $z,vehicule) VALUES ($va ,'$voit')") ;
			
			 // $notif = "INSERT INTO `$j` ( $z,vehicule) VALUES ($va ,'$voit')";

		
			$notif3 = " La réservation a été ajouté avec succés ";
		}
}
	}

	if($i == 1){
		$notif[$i] = $notif1;
	}
	else if($i == 2){
		$notif[$i] = $notif2;
	}
	else if($i == 3){
		$notif[$i] = $notif3;
	}
	else if ($i == 4) {
		$notif[$i] = $ver;
	}
	else if($i == 5){
		$notif[$i] = $id;
	}
	elseif ($i == 6) {
		$notif[$i] = $val;
	}
	elseif ($i == 7) {
		$notif[$i] = $numdem1;
	}
	elseif ($i == 8) {
		$notif[$i] = $idduree1;
	}
	elseif ($i == 9) {
		$notif[$i] = $idduree2;
	}
	elseif ($i == 10) {
		$notif[$i] = $idlieu1;
	}
	elseif ($i == 11) {
		$notif[$i] = $mission;
	}
	elseif ($i == 12) {
		$notif[$i] = $remarq;
	}
	elseif ($i == 13) {
		$notif[$i] = $j;
	}
	elseif ($i == 14) {
		$notif[$i] = $z;
	}	
	elseif ($i == 15) {
		$notif[$i] = $v;
	}
	elseif ($i == 16) {
		$notif[$i] = $vehicl;
	}
	elseif ($i == 17) {
		$notif[$i] = $voit;
	}
	elseif ($i == 18) {
		$notif[$i] = $admin;
	}
	elseif ($i == 19) {
		$notif[$i] = $tab;
	}
	elseif ($i == 20) {
		$notif[$i] = $job;
	}
	elseif ($i == 21) {
		$notif[$i] = $date1;
	}
	elseif ($i == 22) {
		$notif[$i] = $date2;
	}
	elseif ($i == 23) {
		$notif[$i] = $val1;
	}
	elseif ($i == 24) {
		$notif[$i] = $idlieu2;
	}
	elseif ($i == 25) {
		$notif[$i] = $idlie;
	}
	elseif ($i == 26) {
		$notif[$i] = $chauffeur;
	}
	
	
	

		return $notif[$i];
		}


		 

	}
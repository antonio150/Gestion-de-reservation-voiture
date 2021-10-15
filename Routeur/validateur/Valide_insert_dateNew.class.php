<?php 

class Valide_insert_dateNew
{
	public $val;


	public function calcul_date($dat1,$dat2,$i)
	{
		 $jour[] = array();

		$date = new date_reservation();


		$date01=strtotime($dat1);
		$date02=strtotime($dat2);
		$nbjourTime = $date02-$date01;		
			
			if ($i == 1) {
				$jour[$i]= $date->dateToFrench($dat1, "l");
			}

			if ($i == 2) {
				$jour[$i]= $date->dateToFrench($dat2, "l");
			}

			if ($i == 3) {
				$jour[$i] = $nbjourTime/86400;
			}
		
		
		return $jour[$i];
	}




	public function verif($post,$daty)
	{
		 $jour=array();

		 $show[] = array();

			if(isset($post))
			{
				$dat1=$_POST['d1'];
				$dat2=$_POST['d2'];

				if ($dat1 > $dat2) {
						$vi=$dat1; $dat1=$dat2; $dat2=$vi;
					}
				
					$jour1 =  self::calcul_date($dat1,$dat2,'1');
					$jour2 =  self::calcul_date($dat1,$dat2,'2');
					$nbjour =  self::calcul_date($dat1,$dat2,'3');				
				
				if($dat1<$daty || $dat2<$daty){
				$i = 1;
				$show[$i] = "erreur1";

			}
			else if($dat1>=$daty && $dat2>=$daty){
				

				if ($jour1!="lundi" || $jour2!="dimanche" || $nbjour!="6") {
					
					$i = 2;
					$show[$i] = "erreur2";
				}


				else if($jour1=="lundi" && $jour2=="dimanche" && $nbjour=="6") {	
					
					$da2=0;

					$ctrl = new Controller_dateNew();
					
					foreach($ctrl->trouve_tableNow($dat1,$dat2) as $vall){
						$number=$vall['id_tablenow'];
					}

					// echo "id_tablenow = '$number'";

					if( $number!=null){
							$i = 3;
							$show[$i] = "erreur3";
													
												}

					else if( $number==null){
						

							$val=0;
							$ctrl->insert_tableNow($dat1,$dat2);
							foreach ($ctrl->get_all_tableNow() as $rere) {
								$val=$rere['id_tablenow'];

							}

							
							$ctrl->creer_table_Reservation($val);
							$ctrl->creer_table_Lundi($val);
							$ctrl->creer_table_Mardi($val);
							$ctrl->creer_table_Mercredi($val);
							$ctrl->creer_table_Jeudi($val);
							$ctrl->creer_table_Vendredi($val);
							$ctrl->creer_table_Samedi($val);
							$ctrl->creer_table_Dimanche($val);

							$i = 4;
							$show[$i] = "success";
							
							}


					}
				}
			}


	return $show[$i];
	}


}
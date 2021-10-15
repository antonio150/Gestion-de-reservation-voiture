<?php 

class Valide_marquer_Chauff
{

	public function valider($id,$admin,$job,$val,$numc,$date1,$date2,$ver)
	{
		$ctrl = new Controller_reservation();

		$ctrl_chauffeur = new Controller_chauffeur();

		$ctrl_demandeur = new Controller_demandeur();

		foreach ($ctrl->get_One_Reservation($id,$val) as $key) {
				$num_Chauff = $key['idChauff'];
				$num_Demand = $key['numDemand'];
		}

		foreach ($ctrl_demandeur->get_One_Demandeu($num_Demand) as $demande) {
				$num_Dem = $demande['prenomDem'];
		}

		if($num_Chauff == $numc){
			if($ver=="valide"){
		
							
							foreach ($ctrl_chauffeur->get_One_Chauffeur($numc) as $res) {
								$v=$res['prenomChauff'];
							}
		
							$ctrl->modifie_Reservation($val,$v,$id);
							$notif = "success";
		
						
					}else if($ver=="modif"){
		
							$v=0;
							foreach ($ctrl_chauffeur->get_One_Chauffeur($numc) as $res) {
								$v=$res['prenomChauff'];
							}
							
							$ctrl->modifie_Reservation($val,$v,$id);
							$notif = "success";
		
		
			}
		}
		else if($num_Chauff != $numc){
			$notif = "erreur";
		}
	return $notif;
	}


}
<?php 

class Valide_delete_dateTable
{
	
	public function supprimer($name,$val)
	{
		$ctrl = new Controller_dateNew(); 

		if ($name == "admin") {

			$error[] = array();
			
			$ctrl->efface_dateTable($val);
			$ctrl->supprimer_table_Reservation($val);
			$ctrl->supprimer_table_Lundi($val);
			$ctrl->supprimer_table_Mardi($val);
			$ctrl->supprimer_table_Mercredi($val);
			$ctrl->supprimer_table_Jeudi($val);
			$ctrl->supprimer_table_Vendredi($val);
			$ctrl->supprimer_table_Samedi($val);
			$ctrl->supprimer_table_Dimanche($val);

			$i = 1;
			$error[$i] = "success";

		}

		else{
			$i = 2;
			$error[$i] = "erreur";
		}

	return $error[$i];
	}
}
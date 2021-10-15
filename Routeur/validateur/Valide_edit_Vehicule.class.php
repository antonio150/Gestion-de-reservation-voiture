<?php 

class Valide_edit_Vehicule
{
	Public $post ;
	Public $bdd ;

	Public function verif_edit($post,$id_vehicl)
	{
		if(isset($post))
		{
			
			$num_Vehicule=$_POST['numVoi'];
			$type_Vehicule=$_POST['typeVoi'];
			$marque_Vehicule=$_POST['marqVoi'];

			$r=new gereVehicule();
			$r->idVehicule = $id_vehicl;
			$r->numVehicule = $num_Vehicule;
			$r->type = $type_Vehicule;
			$r->marque = $marque_Vehicule;

			$ctrl = new Controller_vehicule();

			foreach ($ctrl->get_One_Vehicule($id_vehicl) as $rr) {
				$numAvant = $rr['numVehicule'];
				$typeAvant = $rr['type'];
				$marqAvant=$rr['marque'];
			}

			foreach ($ctrl->trouve_Vehicule($num_Vehicule) as $rr) {
				$numVerif = $rr['numVehicule'];
				
			}
			$asur[] = array();

			if ($numAvant != $num_Vehicule) {
				if ($numVerif!= null) {
					$i = 1;
					$asur[$i] = "erreur";
					
					}
				else{			
				
				$ctrl->edit_Vehicule($r);
				$i = 2;
					$asur[$i] = "success";
							}
			}else{
				
				$ctrl->edit_Vehicule($r);
			$i = 2;
			$asur[$i] = "success";
			}
				
				
				}
		
		return $asur[$i];
	}


}
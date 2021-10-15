<?php 

class Valide_add_Vehicule
{
	Public $post ;
	Public $bdd ;

	Public function verif_vehicule($post,$bdd)
	{
		$asur[] = array();
		if(isset($post))
		{
			$num_Vehicule=$_POST['numVoi'];
			$type_Vehicule=$_POST['typeVoi'];
			$marque_Vehicule=$_POST['marqVoi'];

			$ctrl = new Controller_vehicule();

			foreach ($ctrl->trouve_Vehicule($num_Vehicule) as $rr) {
				$sur=$rr['numVehicule'];
			}
				if ($sur!=null) {
					$i = 1;
					$asur[$i] = "erreur";
					
					}
				else{
				
				$r=new gereVehicule();
				$r->numVehicule = $num_Vehicule;
				$r->type = $type_Vehicule;
				$r->marque = $marque_Vehicule;

				$ctrl->insert_Vehicule($r);

				$i = 2;
				$asur[$i] = "success";
				
			}

		}

		return $asur[$i];
	}
}
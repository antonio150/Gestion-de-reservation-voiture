<?php 

class Valide_add_Demandeur
{
	Public $post ;
	Public $bdd ;

	Public function verif($post,$bdd)
	{
		if(isset($post))
		{
			$asur[] = array();

			$nom=$_POST['nom'];
			$prenom=$_POST['pnom'];
			$sunom=$_POST['snom'];
			$mp=$_POST['motpass'];

			$ctrl = new Controller_demandeur();

			foreach ($ctrl->trouve_demandeur($sunom) as $rr) {
				$sur=$rr['surnomDem'];
			}
			
				if ($sur!=null) {
					$i = 1;
					$asur[$i] = "alert";
					
					}
				else{
				
				$r=new gereDem();
				$r->nomDem = $nom;
				$r->prenomDem = $prenom;
				$r->surnomDem = $sunom;
				$r->motpass = $mp;
				$ctrl->insert_demandeur($r);
				
				if ($admin==null) {
					$i = 2;
					$asur[$i] = "succesAdmin";
							}
				else{
					$i = 3;
					$asur[$i] = "succes";
				}
				
			}

		}

		return $asur[$i];
	}


}
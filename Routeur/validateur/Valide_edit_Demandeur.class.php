<?php 

class Valide_edit_Demandeur
{
	Public $post ;
	Public $bdd ;

	Public function verif_edit($post,$id)
	{
		if(isset($post))
		{
			$nom=$_POST['nomDe'];
			$prenom=$_POST['prenomDe'];
			$sunom=$_POST['surnomDe'];
			$mp=$_POST['motpass'];

			$r=new gereDem();
				$r->numDemand = $id;
				$r->nomDem = $nom;
				$r->prenomDem = $prenom;
				$r->surnomDem = $sunom;
				$r->motpass = $mp;

			$asur[] = array();

			$ctrl = new Controller_demandeur();

			foreach ($ctrl->get_One_Demandeu($id) as $rr) {
				$nomAvant = $rr['nomDem'];
				$prenomAvant = $rr['prenomDem'];
				$surnomAvant=$rr['surnomDem'];
				$motpassAvant=$rr['motpassDem'];
			}

			foreach ($ctrl->trouve_demandeur($sunom) as $rr) {
				$surnomVerif = $rr['nomDem'];
				
			}

			if ($surnomAvant != $sunom) {
				if ($surnomVerif!= null) {
					$i = 1;
					$asur[$i] = "erreur";
					
					}
				else{			
				
				$ctrl->edit_demandeur($r);				
				$i = 2;
				$asur[$i] = "success1";
							}
			}else{
				
				$ctrl->edit_demandeur($r);
			$i = 3;
			$asur[$i] = "success2";
			}
				
				
				}
		
		return $asur[$i];
	}


}
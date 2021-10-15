<?php 

class Valide_edit_Chauffeur
{
	Public $post ;
	Public $bdd ;

	Public function verif_edit($post,$id)
	{
		if(isset($post))
		{
			$nom=$_POST['nomChauf'];
			$prenom=$_POST['prenomChauf'];
			$sunom=$_POST['surnomChauf'];
			$mp=$_POST['motpass'];

			$r=new Gere();
				$r->idChauff = $id;
				$r->nomChauff = $nom;
				$r->prenomChauff = $prenom;
				$r->surnomChauff = $sunom;
				$r->motpass = $mp;

			$ctrl = new Controller_chauffeur();

			foreach ($ctrl->get_One_Chauffeur($id) as $rr) {
				$nomAvant = $rr['nomChauff'];
				$prenomAvant = $rr['prenomChauff'];
				$surnomAvant=$rr['surnomChauff'];
				$motpassAvant=$rr['motpassChauff'];
			}

			foreach ($ctrl->trouve_Chauffeur($sunom) as $rr) {
				$surnomVerif = $rr['nomChauff'];
				
			}

			$asur[] = array();
			if ($surnomAvant != $sunom) {
				if ($surnomVerif!= null) {
					$i = 1;
					$asur[$i] = "erreur";
					
					}
				else{			
				
				$ctrl->edit_Chauffeur($r);
					$i = 2;
					$asur[$i] = "success1";
							}
			}else{
				
				$ctrl->edit_Chauffeur($r);
			$i = 3;
			$asur[$i] = "success2";
			}
				
				
				}
		
		return $asur[$i];
	}


}
<?php 

class Valide_insert_Admin
{
	public function verif($post,$bdd)
	{
		if(isset($post, $bdd))
		{
			$id=null;
			$sunom=$_POST['snom'];
			$mdp1=$_POST['motpass1'];
			$mdp2=$_POST['motpass2'];
			
			foreach ($bdd->oneData($mdp1) as $res) {
				$id=$res['idAdmin'];
				$pwd=$res['motpass_admin'];
			}
$affichage[] = array();

			if ($pwd==$mdp1) {
				
				$bdd->editData($id,$sunom,$mdp2);
				$i = 1;
				$affichage[$i] = "success";
				}
				else if($pwd!=$mdp1){	
				$i = 2;
				$affichage[$i] = "erreur";
					}	
			
		}
	return $affichage[$i];		
	}
}
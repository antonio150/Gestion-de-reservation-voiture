<?php 

class Valide_insert_chauffeur
{
	
	public function verif($post,$ctrl,$admin)
	{
		if(isset($post))
		{
			$nomCha=$_POST['nomChauf'];
			$prenomCha=$_POST['prenomChauf'];
			$sunom=$_POST['snomChauf'];
			$motpass1=$_POST['motpass'];

			foreach ($ctrl->trouve_Chauffeur($sunom) as $rr) {
				$sur=$rr['surnomChauff'];
			}
$value[] = array();
			
				if ($sur!=null) {
						$i = 1;
						$value[$i] = "erreur";
					}
						
					
				elseif($sur==null){
						$r=new Gere();
						$r->nomChauff = $nomCha;
						$r->prenomChauff = $prenomCha;
						$r->surnomChauff = $sunom;
						$r->motpass = $motpass1;
						
						$ctrl->insert_Chauffeur($r);

						if ($admin==null) {
							$i = 2;
							$value[$i] = "success1";
						}
						else{
							$i = 3;
							$value[$i] = "success2";
						}
						
				
					}

			
		}
	return $value[$i];
	}
}
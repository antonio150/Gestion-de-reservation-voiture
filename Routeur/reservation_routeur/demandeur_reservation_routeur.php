<?php 

class Demandeur_reservation_routeur
{
	public $resi;
	public $prenom;
	public $numDem;
		
	public function __construct($id){
	

		foreach(Demandeur_RolesDAO::oneData($id) as $resi){
			$this->prenom=$resi['prenomDem'];
			$this->numDem=$resi['numDemand'];
		}		
	
	}
	
}
	

?>
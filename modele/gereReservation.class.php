<?php 

/**
 * 
 */
class gereReservation
{
	public $numRes;
	public $numDemand;
	public $idVehicule;
	public $idDuree;
	public $idLieu;
	public $mission;
	public $remarque;
	public $fait;
	
	
	public function __construct()
	{
		$this->numRes=0;
		$this->numDemand=0;
		$this->idVehicule=0;
		$this->idDuree=0;
		$this->idLieu=0;
		$this->mission='';
		$this->remarque='';
		$this->fait='';
		
	}
}
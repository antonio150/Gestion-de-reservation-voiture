<?php 

class init_DB
{
	public $tablenow_RolesDAO;
	public $reservation_RolesDAO;
	public $Lundi_RolesDAO;
	public $Mardi_RolesDAO;
	public $Mercredi_RolesDAO;
	public $Jeudi_RolesDAO;
	public $Vendredi_RolesDAO;
	public $Samedi_RolesDAO;
	public $Dimanche_RolesDAO;
	
	
	function __construct()
	{
		$this->tablenow_RolesDAO = '';
		$this->reservation_RolesDAO = '';
		$this->Lundi_RolesDAO = '';
		$this->Mardi_RolesDAO = '';
		$this->Mercredi_RolesDAO = '';
		$this->Jeudi_RolesDAO = '';
		$this->Vendredi_RolesDAO = '';
		$this->Samedi_RolesDAO = '';
		$this->Dimanche_RolesDAO = '';
		
	}
}
<?php 


/**
 * 
 */

class Vehicule_reservation_routeur
{
	
	function __construct()
	{
		foreach (Vehicule_RolesDAO::listData() as $res8) {
			$this->numv=$res8[0];
			$this->typ=$res8[2];

		}
	}
}
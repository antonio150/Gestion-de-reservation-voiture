<?php 

//require_once ('../modele/gereDuree.class.php');


class Controller_dateNew
{
	
	public function get_all_tableNow()
	{
		$dao = new tablenow_RolesDAO();
		$list = $dao->listData();

		return $list;
	}

	public function get_One_tableNow($val)
	{
		$dao = new tablenow_RolesDAO();
		$one = $dao->oneData($val);

		return $one;
	}

	public function get_Min_tableNow()
	{
		$dao = new tablenow_RolesDAO();
		$one = $dao->minData();

		return $one;
	}	

	public function trouve_tableNow($dat1,$dat2)
	{
		$dao = new tablenow_RolesDAO();
		$one = $dao->entre_2Date($dat1,$dat2);

		return $one;
	}

	public function insert_tableNow($date1,$date2)
	{
		$dao = new tablenow_RolesDAO();
		$dao->insertData($date1,$date2);
	}

	public function efface_tableNow($val)
	{
		$dao = new tablenow_RolesDAO();
		$dao->deleteData($val);
	}

	public function efface_dateTable($val)
	{
		$dao = new dateTable_RolesDAO();
		$dao->deleteData($val);
	}

// CREATION TABLE

	public function creer_table_Reservation($val)
	{
		$dao = new reservation_RolesDAO();
		$dao->createTable($val);
	}

	public function creer_table_Lundi($val)
	{
		$dao = new Lundi_RolesDAO();
		$dao->createTable($val);
	}

	public function creer_table_Mardi($val)
	{
		$dao = new Mardi_RolesDAO();
		$dao->createTable($val);
	}

	public function creer_table_Mercredi($val)
	{
		$dao = new Mercredi_RolesDAO();
		$dao->createTable($val);
	}

	public function creer_table_Jeudi($val)
	{
		$dao = new Jeudi_RolesDAO();
		$dao->createTable($val);
	}

	public function creer_table_Vendredi($val)
	{
		$dao = new Vendredi_RolesDAO();
		$dao->createTable($val);
	}

	public function creer_table_Samedi($val)
	{
		$dao = new Samedi_RolesDAO();
		$dao->createTable($val);
	}

	public function creer_table_Dimanche($val)
	{
		$dao = new Dimanche_RolesDAO();
		$dao->createTable($val);
	}

// SUPPRESSION TABLE

	public function supprimer_table_Reservation($val)
	{
		$dao = new reservation_RolesDAO();
		$dao->dropTable($val);
	}

	public function supprimer_table_Lundi($val)
	{
		$dao = new Lundi_RolesDAO();
		$dao->dropTable($val);
	}

	public function supprimer_table_Mardi($val)
	{
		$dao = new Mardi_RolesDAO();
		$dao->dropTable($val);
	}

	public function supprimer_table_Mercredi($val)
	{
		$dao = new Mercredi_RolesDAO();
		$dao->dropTable($val);
	}

	public function supprimer_table_Jeudi($val)
	{
		$dao = new Jeudi_RolesDAO();
		$dao->dropTable($val);
	}

	public function supprimer_table_Vendredi($val)
	{
		$dao = new Vendredi_RolesDAO();
		$dao->dropTable($val);
	}

	public function supprimer_table_Samedi($val)
	{
		$dao = new Samedi_RolesDAO();
		$dao->dropTable($val);
	}

	public function supprimer_table_Dimanche($val)
	{
		$dao = new Dimanche_RolesDAO();
		$dao->dropTable($val);
	}


}
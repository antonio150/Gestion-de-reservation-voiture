<?php 

require_once(realpath(dirname(__FILE__)) . '/../../dao/DemandeurDao/Demandeur.dao.php');

class Controller_demandeur
{
	
	public function get_all_Demandeur()
	{
		$dao = new Demandeur_RolesDAO();
		$list = $dao->listData();

		return $list;
	}

	public function get_One_Demandeu($val)
	{
		$dao = new Demandeur_RolesDAO();
		$one = $dao->oneData($val);

		return $one;
	}

	public function trouve_demandeur($val)
	{
		$dao = new Demandeur_RolesDAO();
		$one = $dao->findData($val);

		return $one;
	}

	
	public function verif($surnomd,$motpassd)
	{
		$dao = new Demandeur_RolesDAO();
		$data = $dao->authentif_Demandeur($surnomd,$motpassd);

		return $data;
	}

	public function insert_demandeur($rol)
	{
		$dao = new Demandeur_RolesDAO();
		$dao->insertData($rol);
	}

	public function edit_demandeur($rol)
	{
		$dao = new Demandeur_RolesDAO();
		$dao->editData($rol);
	}

	public function efface_demendeur($val)
	{
		$dao = new Demandeur_RolesDAO();
		$dao->deleteData($val);
	}
}
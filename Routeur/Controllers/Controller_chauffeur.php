<?php 

require_once(realpath(dirname(__FILE__)) . '/../../dao/chauffeurDao/Roles.dao.php');

class Controller_chauffeur
{
	
	public function get_all_Chauffeur()
	{
		$dao = new RolesDAO();
		$list = $dao->listData();

		return $list;
	}

	public function get_One_Chauffeur($val)
	{
		$dao = new RolesDAO();
		$one = $dao->oneData($val);

		return $one;
	}

	public function trouve_Chauffeur($val)
	{
		$dao = new RolesDAO();
		$one = $dao->surnomData($val);

		return $one;
	}

	public function verif_Chauffeur($surnomd,$motpassd)
	{
		$dao = new RolesDAO();
		$data = $dao->authentif_Chauffeur($surnomd,$motpassd);

		return $data;
	}

	public function insert_Chauffeur($rol)
	{
		$dao = new RolesDAO();
		$dao->insertData($rol);
	}

	public function edit_Chauffeur($rol)
	{
		$dao = new RolesDAO();
		$dao->editData($rol);
	}

	public function efface_Chauffeur($val)
	{
		$dao = new RolesDAO();
		$dao->deleteData($val);
	}
}
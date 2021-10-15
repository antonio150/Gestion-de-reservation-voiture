<?php 

require_once(realpath(dirname(__FILE__)) . '/../../dao/vehiculeDao/vehicule.dao.php');

class Controller_vehicule
{
	
	public function get_all_Vehicule()
	{
		$dao = new Vehicule_RolesDAO();
		$list = $dao->listData();

		return $list;
	}

	public function get_One_Vehicule($val)
	{
		$dao = new Vehicule_RolesDAO();
		$one = $dao->oneData($val);

		return $one;
	}

	public function insert_Vehicule($rol)
	{
		$dao = new Vehicule_RolesDAO();
		$dao->insertData($rol);
	}

	public function trouve_Vehicule($val)
	{
		$dao = new Vehicule_RolesDAO();
		$one = $dao->findData($val);

		return $one;
	}

	public function edit_Vehicule($rol)
	{
		$dao = new Vehicule_RolesDAO();
		$dao->editData($rol);
	}

	public function efface_Vehicule($val)
	{
		$dao = new Vehicule_RolesDAO();
		$dao->deleteData($val);
	}
}
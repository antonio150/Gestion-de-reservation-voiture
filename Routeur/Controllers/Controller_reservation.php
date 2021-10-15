<?php 


require_once(realpath(dirname(__FILE__)) . '/../../dao/dureeDao/duree.dao.php');
require_once(realpath(dirname(__FILE__)) . '/../../dao/jourDao/lundiDao.php');
require_once(realpath(dirname(__FILE__)) . '/../../dao/jourDao/mardiDao.php');
require_once(realpath(dirname(__FILE__)) . '/../../dao/jourDao/mercrediDao.php');
require_once(realpath(dirname(__FILE__)) . '/../../dao/jourDao/jeudiDao.php');
require_once(realpath(dirname(__FILE__)) . '/../../dao/jourDao/vendrediDao.php');
require_once(realpath(dirname(__FILE__)) . '/../../dao/jourDao/samediDao.php');
require_once(realpath(dirname(__FILE__)) . '/../../dao/jourDao/dimancheDao.php');
require_once(realpath(dirname(__FILE__)) . '/../../dao/reservationDao/reservation.dao.php');


class Controller_reservation
{
	public function get_One_vehicule($vehicl)
	{
		$dao = new Vehicule_RolesDAO();
		$result = $dao->oneData($vehicl);

		return $result;
	}

	public function get_All_Lieu()
	{
		$dao = new lieu_RolesDAO();
		$result = $dao->listData();

		return $result;
	}

	public function get_One_Lieu($idlieu2)
	{
		$dao = new lieu_RolesDAO();
		$result = $dao->oneData($idlieu2);

		return $result;
	}

	public function set_Lieu($val)
	{
		$dao = new lieu_RolesDAO();
		$dao->insertData($val);
	}

	public function get_All_Duree()
	{
		$dao = new Duree_RolesDAO();
		$result = $dao->listData();

		return $result;
	}

	public function set_Duree($tempDepar,$tempArriv)
	{
		$dao = new Duree_RolesDAO();
		$dao->insertData($tempDepar,$tempArriv);
	}

	public function supprimer_Duree($val)
	{
		$dao = new Duree_RolesDAO();
		$dao->deleteData($val);
	}

	public function get_All_Reservation($val)
	{
		$dao = new reservation_RolesDAO();
		$result = $dao->listData($val);

		return $result;
	}

	public function get_One_Reservation($id,$val)
	{
		$dao = new reservation_RolesDAO();
		$result = $dao->oneData($id,$val);

		return $result;
	}

	public function set_Reservation($val,$numdem1,$chauffeur,$vehicl,$temp,$idlieu1,$mission,$remarq)
	{
		$dao = new reservation_RolesDAO();
		$dao->insertData($val,$numdem1,$chauffeur,$vehicl,$temp,$idlieu1,$mission,$remarq);
	}

	public function efface_Reservation($val,$id,$numd)
	{
		$dao = new reservation_RolesDAO();
		$dao->deleteData($val,$id,$numd);
	}

	public function modifie_Reservation($val,$v,$id)
	{
		$dao = new reservation_RolesDAO();
		$dao->editData($val,$v,$id);
	}

	public function get_All_Lundi($val)
	{
		$dao = new Lundi_RolesDAO();
		$result = $dao->listData($val);

		return $result;
	}

	public function set_Lundi($j,$vehicule,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15,$n16,$n17,$n18,$n19,$n20)
	{
		$dao = new Lundi_RolesDAO();
		$dao->insertData($j,$vehicule,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15,$n16,$n17,$n18,$n19,$n20);
	}

	public function efface_data_Lundi($val,$id)
	{
		$dao = new Lundi_RolesDAO();
		$dao->deleteData($val,$id);
	}

	public function get_All_Mardi($val)
	{
		$dao = new Mardi_RolesDAO();
		$result = $dao->listData($val);

		return $result;
	}

	public function set_Mardi($j,$vehicule,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15,$n16,$n17,$n18,$n19,$n20)
	{
		$dao = new Mardi_RolesDAO();
		$dao->insertData($j,$vehicule,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15,$n16,$n17,$n18,$n19,$n20);
	}

	public function efface_data_Mardi($val,$id)
	{
		$dao = new Mardi_RolesDAO();
		$dao->deleteData($val,$id);
	}

	public function get_All_Mercredi($val)
	{
		$dao = new Mercredi_RolesDAO();
		$result = $dao->listData($val);

		return $result;
	}

	public function set_Mercredi($j,$vehicule,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15,$n16,$n17,$n18,$n19,$n20)
	{
		$dao = new Mercredi_RolesDAO();
		$dao->insertData($j,$vehicule,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15,$n16,$n17,$n18,$n19,$n20);
	}

	public function efface_data_Mercredi($val,$id)
	{
		$dao = new Mercredi_RolesDAO();
		$dao->deleteData($val,$id);
	}

	public function get_All_Jeudi($val)
	{
		$dao = new Jeudi_RolesDAO();
		$result = $dao->listData($val);

		return $result;
	}

	public function set_Jeudi($j,$vehicule,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15,$n16,$n17,$n18,$n19,$n20)
	{
		$dao = new Jeudi_RolesDAO();
		$dao->insertData($j,$vehicule,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15,$n16,$n17,$n18,$n19,$n20);
	}

	public function efface_data_Jeudi($val,$id)
	{
		$dao = new Jeudi_RolesDAO();
		$dao->deleteData($val,$id);
	}

	public function get_All_Vendredi($val)
	{
		$dao = new Vendredi_RolesDAO();
		$result = $dao->listData($val);

		return $result;
	}

	public function set_Vendredi($j,$vehicule,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15,$n16,$n17,$n18,$n19,$n20)
	{
		$dao = new Vendredi_RolesDAO();
		$dao->insertData($j,$vehicule,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15,$n16,$n17,$n18,$n19,$n20);
	}

	public function efface_data_Vendredi($val,$id)
	{
		$dao = new Vendredi_RolesDAO();
		$dao->deleteData($val,$id);
	}

	public function get_All_Samedi($val)
	{
		$dao = new Samedi_RolesDAO();
		$result = $dao->listData($val);

		return $result;
	}

	public function set_Samedi($j,$vehicule,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15,$n16,$n17,$n18,$n19,$n20)
	{
		$dao = new Samedi_RolesDAO();
		$dao->insertData($j,$vehicule,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15,$n16,$n17,$n18,$n19,$n20);
	}

	public function efface_data_Samedi($val,$id)
	{
		$dao = new Samedi_RolesDAO();
		$dao->deleteData($val,$id);
	}


	public function get_All_Dimanche($val)
	{
		$dao = new Dimanche_RolesDAO();
		$result = $dao->listData($val);

		return $result;
	}

	public function set_Dimanche($j,$vehicule,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15,$n16,$n17,$n18,$n19,$n20)
	{
		$dao = new Dimanche_RolesDAO();
		$dao->insertData($j,$vehicule,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15,$n16,$n17,$n18,$n19,$n20);
	}

	public function efface_data_Dimanche($val,$id)
	{
		$dao = new Dimanche_RolesDAO();
		$dao->deleteData($val,$id);
	}


}
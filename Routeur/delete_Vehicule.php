<?php 
ini_set("display_errors", "off"); 
require_once('../session-verif.php');
require_once('../session2-verif.php');

require_once ('../dao/vehiculeDao/vehicule.dao.php');
require_once './Controllers/Controller_vehicule.php';

$id_vehicule = $_GET['v'];


$ctrl = new Controller_vehicule();
$ctrl->efface_Vehicule($id_vehicule);

if ($admin == 'admin') {
	header("location:http://localhost:8080/projet%20php/view/vehicule_view/vehicule_view.php?i=$id & name=$admin&job=$job");
}
else{
	header("location:http://localhost:8080/projet%20php/");
}

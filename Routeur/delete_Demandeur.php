<?php 
ini_set("display_errors", "off"); 

require_once ('../modele/gereDem.class.php');
require_once ('../dao/DemandeurDao/Demandeur.dao.php');
require_once ('./validateur/Valide_add_Demande.class.php');
require_once './Controllers/Controller_demandeur.php';

$id = $_GET['i'];
$admin=$_GET['name'];
$job=$_GET['job'];

$ctrl = new Controller_demandeur();
$ctrl->efface_demendeur($id);

if ($admin == 'admin') {
	header("location:http://localhost:8080/projet%20php/view/demandeur_view/demandeur_view.php?i=$id & name=$admin&job=$job");
}
else{
	header('location: http://localhost:8080/projet%20php/deconnect_img.php');
}

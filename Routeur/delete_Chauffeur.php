<?php 
ini_set("display_errors", "off"); 
require_once ('../modele/Gere.classe.php');
require_once ('../dao/chauffeurDao/Roles.dao.php');
require_once './Controllers/Controller_chauffeur.php';

$id = $_GET['i'];
$admin=$_GET['name'];
$job=$_GET['job'];

$ctrl = new Controller_Chauffeur();
$ctrl->efface_Chauffeur($id);

if ($admin == 'admin') {
	header("location:http://localhost:8080/projet%20php/view/chauffeur_view/chauffeur_view.php?i=$id & name=$admin&job=$job");
}
else{
	header("location:http://localhost:8080/projet%20php/");
}

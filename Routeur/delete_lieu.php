<?php 
ini_set("display_errors", "off");
include '../dao/lieuDao/lieu.dao.php';

// header("location: javascript:history.go(-1)");

$page = $_GET['action'];
$val = $_GET['val'];
$date1=$_GET['date1'];
$date2=$_GET['date2'];

lieu_RolesDAO::emptyData();

if ($page == 'reservation') {
	header("location: http://localhost:8080/projet%20php/view/reservation_view/reservation_view.php");
}
elseif ($page == 'tableModif') {
	header("location: http://localhost:8080/projet%20php/view/reservation_view/tableModif_view.php?val=$val&date1=$date1&date2=$date2");
	
}elseif ($page == 'reserv_Admin') {
	header("location: http://localhost:8080/projet%20php/view/reservation_view/reserAdmin_view.php");
}


?>

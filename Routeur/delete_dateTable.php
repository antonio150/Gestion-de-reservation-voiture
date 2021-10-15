<?php
ini_set("display_errors", "off"); 

$id=$_GET['i'];
$val=$_GET['val'];
$name=$_GET['name'];
$job=$_GET['job'];
$date1=$_GET['date1'];
$date2=$_GET['date2'];


include '../dao/dateTableDao/dateTable.dao.php';

include '../dao/reservationDao/reservation.dao.php';
include '../dao/jourDao/lundiDao.php';
include '../dao/jourDao/mardiDao.php';
include '../dao/jourDao/mercrediDao.php';
include '../dao/jourDao/jeudiDao.php';
include '../dao/jourDao/vendrediDao.php';
include '../dao/jourDao/samediDao.php';
include '../dao/jourDao/dimancheDao.php';
include './validateur/Valide_delete_dateTable.class.php';

require_once './Controllers/Controller_dateNew.php';


$validateur_supprime = new Valide_delete_dateTable();
$val = $validateur_supprime->supprimer($name,$val);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Message</title>
</head>
<style type="text/css">
	
	.noobg{
		margin-top:00px;margin-bottom:10px;margin-left:400px;margin-right:300px;
		font-size: 20px;
		color: black;
		background-color: white; padding: 20px;border-radius: 10px;text-align: center;
		display:inline-block; border: solid;position: absolute;

	}
	
	.img{
		width: 400px;
	}
</style>
<body>

	<div class='noobg'>
	
	 <?php 
	

	 if ($val == "erreur") {
	 	?>
	 	<img class='img' src='../Public/img/error.gif'><br>
	 	<?php 
	 	 echo (" Déjoler ! Vous n'êtes pas Administrateur ");
	 	 ?>

	 	 <a href=javascript:history.go(-1)>Retour</a>
	 	 <?php 
	 }
	
	 else if($val == "success"){
	 	?>
	 	<img class='img' src='../Public/img/success2.gif'><br>
	 	<?php 
	 	 echo ("le tableau a été supprimé avec succés
					Vous allez rédiriger dans la liste des tableau maintenant ! ");
	 	 ?>
	 	
	 	 <meta http-equiv='refresh' content='2;URL=http://localhost:8080/projet%20php/view/reservation_view/newtable_view.php? '>
	 	  <?php 
	 }
	
	  ?>
	   </div>
</body>
</html>

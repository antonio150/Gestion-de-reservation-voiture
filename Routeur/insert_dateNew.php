

<?php 

ini_set("display_errors", "off");

include '../dao/dateTableDao/dateTable.dao.php';
include '../dao/dureeDao/duree.dao.php';
//require_once ('../modele/gereDuree.class.php');
include '../dao/DemandeurDao/Demandeur.dao.php';
include '../dao/vehiculeDao/vehicule.dao.php';
include '../dao/lieuDao/lieu.dao.php';
include '../dao/reservationDao/reservation.dao.php';
include '../dao/jourDao/lundiDao.php';
include '../dao/jourDao/mardiDao.php';
include '../dao/jourDao/mercrediDao.php';
include '../dao/jourDao/jeudiDao.php';
include '../dao/jourDao/vendrediDao.php';
include '../dao/jourDao/samediDao.php';
include '../dao/jourDao/dimancheDao.php';
include '../Routeur/reservation_routeur/demandeur_reservation_routeur.php';
include '../Routeur/reservation_routeur/date_reservation.php';

include './validateur/init_DB/init_DB.php';
include './validateur/Valide_insert_dateNew.class.php';
require_once './Controllers/Controller_dateNew.php';

$id=$_GET['i'];
$admin=$_GET['name'];
$job=$_GET['job'];
$daty=$_GET['daty'];


$validateur = new Valide_insert_dateNew();
$value = $validateur->verif($_POST['create'],$daty);



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
		width: 300px;
	}
</style>

<body>

	<div class='noobg'>
	
	 <?php 
	

	 if ($value == "erreur1") {
	 	?>
	 	<img class='img' src='../Public/img/error.gif'><br>
	 	<?php 
	 	 echo (" La date que vous avez saisit est deja passé ! Veuillez inserer un nouveau date. ");
	 	 ?>

	 	 <a href=javascript:history.go(-1)>Retour</a>
	 	 <?php 
	 }
	

	 else if($value == "erreur2"){
	 	?>
	 	<img class='img' src='../Public/img/error.gif'><br>
	 	<?php 
	 	 echo (" Choisissez le lundi au dimanche de la semaine ");
	 	 ?>
	 	
	 	 <meta http-equiv='refresh' content='5;URL=http://localhost:8080/projet%20php/view/reservation_view/newtable_view.php'>
	 	  <?php 
	 }

	 else if($value == "erreur3"){
	 	?>
	 	<img class='img' src='../Public/img/error.gif'><br>
	 	<?php 
	 	 echo (" La date que vous avez saisit est deja utilisé ! Veuillez inserer un nouveau date. ");
	 	 ?>
	 	
	 	 <meta http-equiv='refresh' content='5;URL=http://localhost:8080/projet%20php/view/reservation_view/newtable_view.php '>
	 	  <?php 
	 }

	  else if($value == "success"){
	 	?>
	 	<img class='img' src='../Public/img/success.gif'><br>
	 	<?php 
	 	 echo (" Ajouter avec success ! ");
	 	 ?>
	 	
	 	 <meta http-equiv='refresh' content='5;URL=http://localhost:8080/projet%20php/view/reservation_view/newtable_view.php'>
	 	  <?php 
	 }
	  ?>
	   </div>
</body>
</html>

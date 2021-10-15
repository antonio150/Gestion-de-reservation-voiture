<?php 
require_once('../../session-verif.php');
require_once('../../session2-verif.php');

ini_set("display_errors", "off");

include '../../dao/dateTableDao/dateTable.dao.php';
include '../../dao/dureeDao/duree.dao.php';
//require '../../modele/gereDuree.class.php';
include '../../dao/DemandeurDao/Demandeur.dao.php';

include '../../dao/vehiculeDao/vehicule.dao.php';
include '../../dao/lieuDao/lieu.dao.php';
include '../../dao/reservationDao/reservation.dao.php';

include '../../dao/jourDao/lundiDao.php'; 
include '../../dao/jourDao/mardiDao.php';
include '../../dao/jourDao/mercrediDao.php';
include '../../dao/jourDao/jeudiDao.php';
include '../../dao/jourDao/vendrediDao.php';
include '../../dao/jourDao/samediDao.php';
include '../../dao/jourDao/dimancheDao.php';

include '../../Routeur/reservation_routeur/demandeur_reservation_routeur.php';
include '../../Routeur/reservation_routeur/date_reservation.php';


$con = mysqli_connect("localhost","root","","park");

$annee = date("Y");
$semaine = date("W");
$first = date( 'w', mktime(0, 0, 0, 1, 1, $annee) ) - 2;
if( $first == -1 )
    $first = 6;
else if( $first == -2 )
    $first = 5;
$daty= date( 'Y-m-d', mktime(0, 0, 0, 1, ( $semaine - 1) * 7 - $first, $annee) );


dateTable_RolesDAO::insertData($daty);
tablenow_RolesDAO::deleteData_min($daty);

$date = new date_reservation();
$dat1 = $date->dat1;
$dat2 = $date->dat2;
$val = $date->val;

$jour1 = $date->dateToFrench($dat1, "l j F Y");
$jour2 = $date->dateToFrench($dat2, "l j F Y");


foreach(tablenow_RolesDAO::listData() as $list){
	$numb = $list['id_tablenow'];
}

 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Tableau</title>
</head>
<link rel="stylesheet" type="text/css" href="../../Public/css/animation.css">
<link rel="stylesheet" type="text/css" href="../../Public/css/reservation/newtable.css">

<style type="text/css">

</style>

<body >

<script src='../../node_modules/sweetalert/dist/sweetalert.min.js'></script>
<script type='text/javascript' src='../../Public/script/alert.js'></script>
<script type='text/javascript' src='../../Public/script/alert3.js'></script>

<style type="text/css">

</style>

<?php 

if ($numb == null) {
	
				if ($job=="demandeur") {
					 	
					  ?>
				<div class="menu-bar">
				<ul>
					<li class="demande" onclick="popUp_vide()"><img src="../../Public/img/demande.png" style="width: 50px;height: 50px;">Demandeur</li>
					<li class="chauffeur" onclick="popUp()"><img src="../../Public/img/cha.png" style="width: 50px;height: 50px;">Chauffeur</li>
					<li class="vehicule" onclick="popUp()"><img src="../../Public/img/car.png" style="width: 50px;height: 50px;">Véhicule</li>
					<li class="reservaton" onclick="popUp_vide()"><img src="../../Public/img/reserv.png" style="width: 50px;height: 50px;">Réservation</a></li>
					<li class="table" onclick="popUp_vide()"><img src="../../Public/img/new.png" style="width: 50px;height: 50px;">Nouvelle table</li>
						
				</ul>
			</div>



				<?php 
			}
			elseif ($job=="chauffeur") {	
				 ?>

				 	<div class="menu-bar">
				<ul>
					<li class="demande" onclick="popUp()" ><img src="../../Public/img/demande.png" style="width: 50px;height: 50px;">Demandeur</li>
					<li class="chauffeur" onclick="popUp_vide()"><img src="../../Public/img/cha.png" style="width: 50px;height: 50px;">Chauffeur</li>
					<li class="vehicule" onclick="popUp_vide()"><img src="../../Public/img/car.png" style="width: 50px;height: 50px;">Véhicule</li>
					<li class="reservaton" onclick="popUp_vide()"><img src="../../Public/img/reserv.png" style="width: 50px;height: 50px;">Réservation</a></li>
					<li class="table" onclick="popUp_vide()"><img src="../../Public/img/new.png" style="width: 50px;height: 50px;">Nouvelle table</li>
						
				</ul>
			</div>

				 <?php 
				 }
				  
				  elseif ($job==null) {	
				 ?>

				  <div class="menu-bar">
				<ul>
					<li class="demande" onclick="popUp_vide()"><img src="../../Public/img/demande.png" style="width: 50px;height: 50px;">Demandeur</li>
					<li class="chauffeur" onclick="popUp_vide()"><img src="../../Public/img/cha.png" style="width: 50px;height: 50px;">Chauffeur</li>
					<li class="vehicule" onclick="popUp_vide()"><img src="../../Public/img/car.png" style="width: 50px;height: 50px;">Véhicule</li>
					<li class="reservaton" onclick="popUp_vide()"><img src="../../Public/img/reserv.png" style="width: 50px;height: 50px;">Réservation</a></li>
					<li class="table" onclick="popUp_vide()"><img src="../../Public/img/new.png" style="width: 50px;height: 50px;">Nouvelle table</li>
						
				</ul>
			</div>

	 <?php 
	}
 }else{

			if ($job=="demandeur") {
					 	
					  ?>
				<div class="menu-bar">
				<ul>
					<li class="demande"><a href="http://localhost:8080/projet%20php/view/demandeur_view/demandeur_view.php"><img src="../../Public/img/demande.png" style="width: 50px;height: 50px;">Demandeur</a></li>
					<li class="chauffeur" onclick="popUp()"><img src="../../Public/img/cha.png" style="width: 50px;height: 50px;">Chauffeur</li>
					<li class="vehicule" onclick="popUp()"><img src="../../Public/img/car.png" style="width: 50px;height: 50px;">Véhicule</li>
					<li class="reservaton"><a href="http://localhost:8080/projet%20php/view/reservation_view/reservation_view.php"><img src="../../Public/img/reserv.png" style="width: 50px;height: 50px;">Réservation</a></li>
					<li class="table"><a href="http://localhost:8080/projet%20php/view/reservation_view/newtable_view.php"><img src="../../Public/img/new.png" style="width: 50px;height: 50px;">Nouvelle table</a></li>
						
				</ul>
			</div>



				<?php 
			}
			elseif ($job=="chauffeur") {	
				 ?>

				 	<div class="menu-bar">
				<ul>
					<li class="demande" onclick="popUp()" ><img src="../../Public/img/demande.png" style="width: 50px;height: 50px;">Demandeur</li>
					<li class="chauffeur"><a href="http://localhost:8080/projet%20php/view/chauffeur_view/chauffeur_view.php"><img src="../../Public/img/cha.png" style="width: 50px;height: 50px;">Chauffeur</a></li>
					<li class="vehicule"><a href="http://localhost:8080/projet%20php/view/vehicule_view/vehicule_view.php"><img src="../../Public/img/car.png" style="width: 50px;height: 50px;">Véhicule</a></li>
					<li class="reservaton"><a href="http://localhost:8080/projet%20php/view/reservation_view/validereserve_view.php"><img src="../../Public/img/reserv.png" style="width: 50px;height: 50px;">Réservation</a></li>
					<li class="table"><a href="http://localhost:8080/projet%20php/view/reservation_view/newtable_view.php"><img src="../../Public/img/new.png" style="width: 50px;height: 50px;">Nouvelle table</a></li>
						
				</ul>
			</div>

				 <?php 
				 }
				  
				  elseif ($job==null) {	
				 ?>

				  <div class="menu-bar">
				<ul>
					<li class="demande"><a href="http://localhost:8080/projet%20php/view/demandeur_view/demandeur_view.php"><img src="../../Public/img/demande.png" style="width: 50px;height: 50px;">Demandeur</a></li>
					<li class="chauffeur"><a href="http://localhost:8080/projet%20php/view/chauffeur_view/chauffeur_view.php"><img src="../../Public/img/cha.png" style="width: 50px;height: 50px;">Chauffeur</a></li>
					<li class="vehicule"><a href="http://localhost:8080/projet%20php/view/vehicule_view/vehicule_view.php"><img src="../../Public/img/car.png" style="width: 50px;height: 50px;">Véhicule</a></li>
					<li class="reservaton"><a href="http://localhost:8080/projet%20php/view/reservation_view/reserAdmin_view.php"><img src="../../Public/img/reserv.png" style="width: 50px;height: 50px;">Réservation</a></li>
					<li class="table"><a href="http://localhost:8080/projet%20php/view/reservation_view/newtable_view.php"><img src="../../Public/img/new.png" style="width: 50px;height: 50px;">Nouvelle table</a></li>
						
				</ul>
			</div>

	 <?php 
	 }


}


	

	  ?>

	  <div>
	<img src="../../Public/img/poiss.jpg" class="img_poisson" style=" ">
</div>
<a href="http://localhost:8080/projet%20php/deconnect.php" class="deconnect" style="  ">
	<img src="../../Public/img/logout.png" class="logout_img" style=""> <div> Deconnecter</div>
</a>
	  <div class="titre">
	  	Création de la table entre deux date

	  	<form action="" class="date_recherche"  method="post"><input type="submit" class="submit_recherche" name="recherche_date" value="Rechercher archives"> <input type="date" name="date" class="input_date" required></form>

	  	<?php 

	  	
	  	 ?>

	  </div>

<br><br><br>

<div class="fbody">

	<?php 

	if ($job!="chauffeur") {
		?>

					<div class="champ">
						<form action="../../Routeur/insert_dateNew.php?i=<?php echo $id; ?>&name=<?php echo $admin; ?>&job=<?php echo $job; ?>&daty=<?php echo $daty; ?>&jour1=<?php echo $jour1; ?>&jour2=<?php echo $jour2 ?>" method="post" class="champ_form" style=" ">
						
							<div >
								<input type="submit" value="CREER" name="create" class="champ_submit" style="">

								<input type="date" name="d1" required>							
								
								<input type="date" name="d2" required>
							</div>
											
						</form>

					</div>

<?php }


	 ?>
<br><br><br>

<div class="tables">

		<table class="tab1" >

			<caption>Les reservation en cours d'éxecution</caption>

				<tr style="background-color: rgb(130,130,255);color:white;">
					
					<th>Premier date</th>
					<th>Deuxieme date</th>	
					<th>Action</th>	

				</tr>
				<?php 
					setlocale(LC_TIME, 'french.UTF-8', 'fr_FR.UTF-8');
					
					foreach (tablenow_RolesDAO::listData() as $res1) {
						$i=$res1['id_tablenow'];
						$d1=$res1['date1'];
						$d2=$res1['date2'];		
				 ?>
				<tr>
					
					<td><?php echo $date->dateToFrench($d1, "l j F Y"); ?></td>
					<td><?php echo $date->dateToFrench($d2, "l j F Y"); ?></td>
					<td>
						<a class="a1"  href="tableModif_view.php?i=<?php echo $id ?>&val=<?php echo $res1['id_tablenow'] ?>& name=<?php echo $admin ?>& job=<?php echo $job ?>& date1=<?php echo $d1; ?>& date2=<?php echo $d2; ?>">  afficher</a>
						<a class="a2"  href="../../Routeur/delete_dateNew.php?i=<?php echo $id ?>&val=<?php echo $res1['id_tablenow'] ?>& name=<?php echo $admin ?>& job=<?php echo $job ?>& date1=<?php echo $d1; ?>& date2=<?php echo $d2; ?>">  Supprimer</a>

					</td>

				</tr>
				<?php 
				}
				 ?>	

			</table>

	




			<table  class="tab2">

		<caption>Les archives de la réservation</caption>

				<tr style="background-color: rgba(130,130,255);color:white;">
					
					<th>Premier date</th>
					<th>Deuxieme date</th>
					<th>Action</th>		

				</tr>
				<?php 
					if (isset($_POST['recherche_date'])) {
						$date_find = $_POST['date'];

						foreach (dateTable_RolesDAO::findData($date_find) as $find_date) {
						 	$i=$find_date['id_datetable'];
							$date_1=$find_date['date1'];
							$date_2=$find_date['date2'];

					?>
				<tr>
					
					<td><?php echo $date->dateToFrench($date_1, "l j F Y"); ?></td>
					<td><?php echo $date->dateToFrench($date_2, "l j F Y"); ?></td>
					<td>
						<?php 
						if ($numb == null) {
						 	?>
						 	<a class="a1" onclick="popUp_vide()"> afficher</a>
						 	<a class="a2" onclick="popUp_vide()"> supprimer</a>
						 	
						 	<?php 
						 }
						 else{ ?>
						 	<a class="a1" href="reserv_view.php?val=<?php echo $find_date['number'] ?>& i=<?php echo $id ?>& name=<?php echo $admin ?>& job=<?php echo $job ?>& date1=<?php echo $date_1; ?>& date2=<?php echo $date_2; ?>"> afficher</a>

						 	<a class="a2" href="../../Routeur/delete_dateTable.php?i=<?php echo $id ?>&val=<?php echo $find_date['number'] ?>& name=<?php echo $admin ?>& job=<?php echo $job ?>& date1=<?php echo $d1; ?>& date2=<?php echo $d2; ?>">Supprimer</a>
						<?php 
						 } ?>
						

					</td>

				</tr>

					<?php 
						
						 } 


					}
					else if(!isset($_POST['recherche_date'])){
						foreach (dateTable_RolesDAO::listData() as $find_date) {

						$i=$find_date['id_datetable'];
						$date_1=$find_date['date1'];
						$date_2=$find_date['date2'];
	
				 ?>
				<tr>
					
					<td><?php echo $date->dateToFrench($date_1, "l j F Y"); ?></td>
					<td><?php echo $date->dateToFrench($date_2, "l j F Y"); ?></td>
					<td>
						<?php 
						if ($numb == null) {
						 	?>
						 	<a class="a1" onclick="popUp_vide()"> afficher</a>
						 	<a class="a2" onclick="popUp_vide()"> supprimer</a>
						 	
						 	<?php 
						 }
						 else{ ?>
						 	<a class="a1" href="reserv_view.php?val=<?php echo $find_date['number'] ?>& i=<?php echo $id ?>& name=<?php echo $admin ?>& job=<?php echo $job ?>& date1=<?php echo $date_1; ?>& date2=<?php echo $date_2; ?>"> afficher</a>

						 	<a class="a2" href="../../Routeur/delete_dateTable.php?i=<?php echo $id ?>&val=<?php echo $find_date['number'] ?>& name=<?php echo $admin ?>& job=<?php echo $job ?>& date1=<?php echo $d1; ?>& date2=<?php echo $d2; ?>">Supprimer</a>
						<?php 
						 } ?>
						

					</td>

				</tr>
				<?php 
				}
			}
				 ?>	

			</table>


</div>

</div>

</body>
</html>
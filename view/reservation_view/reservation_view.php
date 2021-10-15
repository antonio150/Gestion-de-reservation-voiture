<?php 

ini_set('display_errors','off');
require_once('../../session-verif.php');
require_once('../../session2-verif.php');


include '../../dao/dateTableDao/dateTable.dao.php';
include '../../dao/tablenowDao/tablenow.dao.php';
include '../../dao/dureeDao/duree.dao.php';
//require '../../modele/gereDuree.class.php';
include '../../dao/DemandeurDao/Demandeur.dao.php';
include '../../dao/chauffeurDao/Roles.dao.php';
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


$job =str_replace(' ','',$job);
$j="";

$annee = date("Y");
$semaine = date("W");
$first = date( 'w', mktime(0, 0, 0, 1, 1, $annee) ) - 2;
if( $first == -1 )
    $first = 6;
else if( $first == -2 )
    $first = 5;
$daty= date( 'Y-m-d', mktime(0, 0, 0, 1, ( $semaine - 1) * 7 - $first, $annee) );


$date = new date_reservation();

$dat1 = $date->dat1;
$dat2 = $date->dat2;
$val = $date->val;



$date_french1 = $date->dateToFrench($dat1, "l j F Y");
$date_french2 = $date->dateToFrench($dat2, "l j F Y");


dateTable_RolesDAO::insertData($daty);
tablenow_RolesDAO::deleteData_min($daty);

foreach(tablenow_RolesDAO::listData() as $list){
	$numb = $list['id_tablenow'];
}

if ($numb == null) {
	header("location: newtable_view.php");
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Reservation</title>
<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="" /> 
	<link rel="stylesheet" type="text/css" href="../../Public/css/reservation/styleReser.css">
	<link rel="stylesheet" type="text/css" href="../../Public/css/reservation/reservation.css">
	<link rel="stylesheet" type="text/css" href="../../Public/css/animation.css">

<script src='../../node_modules/sweetalert/dist/sweetalert.min.js'></script>
<script type='text/javascript' src='../../Public/script/alert.js'></script>
<script type='text/javascript' src='../../Public/script/verif.js'></script>

</head>

<style type="text/css">
	
</style>


<body >

	
</script>
	<?php 
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
	  ?>

<div>
	<img src="../../Public/img/poiss.jpg" class="img_poisson" style=" ">
</div>
<a href="http://localhost:8080/projet%20php/deconnect.php" class="deconnect" style=" ">
	<img src="../../Public/img/logout.png" class="img_logout" style=""> <div> Deconnecter</div>
</a>


<div class="titre">
		Tableau de réservation du <h class="date" style=""><?php echo $date_french1 ; ?></h>  au <h class="date" ><?php echo $date_french2 ; ?></h>
		<a class="delLieu" href="../../Routeur/delete_lieu.php?action=<?php echo('reservation') ?>">Vider le lieu</a>
	</div>




<div class="fbody">
	
  <div class="champ" >
  		<div class="veh">Faire une réservation de voiture</div>
	<form action="../../Routeur/insert_reservation_routeur.php?i=<?php echo $id ?> & name=<?php echo $admin ?> & job=<?php echo $job; ?> & val=<?php echo $val; ?>& ver=<?php echo 'reser' ?>& date1=<?php echo $dat1; ?>& date2=<?php echo $dat2; ?>" method="post" id="remplir">

		<fieldset style="" class="champp">
			
			<div class="nomdem">
				<label>Nom de demandeur :</label>
				
				<select name="numDema" type="text" style="" class="sel">
					<?php 

					$valu = new Demandeur_reservation_routeur($id);
					$prenom=$valu->prenom;
					$numDem=$valu->numDem;

					 ?>
					<option value="<?php echo $numDem; ?>"> <?php echo $prenom; ?>  </option>

					

				</select>
			</div>


			
			<div  style="" class="heureT">
				Saisir l'heur :
					<select name="iduree" style="" class="duree">

					<option value="7"> 7h</option>
					<option value="8"> 8h</option>
					<option value="9"> 9h</option>
					<option value="10"> 10h</option>
					<option value="11"> 11h</option>
					<option value="12"> 12h</option>
					<option value="13"> 13h</option>
					<option value="14"> 14h</option>
					<option value="15"> 15h</option>
					<option value="16"> 16h</option>
					<option value="17"> 17h</option>
					<option value="18"> 18h</option>
					<option value="19"> 19h</option>
					<option value="20"> 20h</option>
					

				</select>
				à 
				<select name="iduree2" style="height: 25px;" >

					<option value="7"> 7h</option>
					<option value="8"> 8h</option>
					<option value="9"> 9h</option>
					<option value="10"> 10h</option>
					<option value="11"> 11h</option>
					<option value="12"> 12h</option>
					<option value="13"> 13h</option>
					<option value="14"> 14h</option>
					<option value="15"> 15h</option>
					<option value="16"> 16h</option>
					<option value="17"> 17h</option>
					<option value="18"> 18h</option>
					<option value="19"> 19h</option>
					<option value="20"> 20h</option>
					

				</select>
			
				<select name="jour" style="" class="jour">
					<option value="lundi_<?php echo $val; ?>"> Lundi</option>
					<option value="mardi_<?php echo $val; ?>"> Mardi</option>
					<option value="mercredi_<?php echo $val; ?>"> Mercredi</option>
					<option value="jeudi_<?php echo $val; ?>"> Jeudi</option>
					<option value="vendredi_<?php echo $val; ?>"> Vendredi</option>
					<option value="samedi_<?php echo $val; ?>"> Samedi</option>
					<option value="dimanche_<?php echo $val; ?>"> Dimanche</option>
				
				</select>
			</div>
			<div >
				vehicule/chauffeur :
					<select name="vehicule" style="" class="vehicule">

					<?php					
					foreach (Vehicule_RolesDAO::listData() as $res8) {
						$numv = $res8['idVehicule'];
						$typ = $res8['type'];
					
					?>

					<option value="<?= $numv; ?>"> <?php echo $typ; ?></option>
					
					<?php 
						}
					 ?>

				</select> et

				<select name="chauffeur" class="chauffeur_class">
					<?php 

					foreach (RolesDAO::listData() as $chauff) {
						$numC = $chauff['idChauff'];
						$prenomC=$chauff['prenomChauff'];
					
					 ?>

					 <option value="<?= $numC; ?>"><?php echo $prenomC; ?></option>

					<?php }
					 ?>
					 
				</select>

			</div>


			<div class="lieu">
				Lieu :
				<input type="text" style="" onkeyup="verif_Space2(this)" class="voitr" name="idlieu" placeholder="Saisir lieu " id="lieu" >
				ou choisissez
				<select name="idlieu2" style="" class="voitr2" id="lieu2">
					<option value="null">Selctionnez un lieu</option>
					<?php 					

				foreach (lieu_RolesDAO::listData() as $vale) {
					$idlieu = $vale['idLieu'];
					$lieuarriv = $vale['lieuArriv'];
					?>

					<option value="<?php echo $idlieu; ?>"> <?php echo $lieuarriv; ?></option>
					
					<?php 
						}
					 ?>

				</select>
			
			</div>

			<div class="motif" >
				Mission :
				<input type="text" style="" class="missio" name="mission" placeholder="Saisir mission" onkeyup="verif_Space2(this)" id="motiff" required>
			</div>

			<div class="remarque" >
				Remarque :
				<input type="text" style="" class="remarq" name="remarque" placeholder="Saisir remarque" onkeyup="verif_Space2(this)" id="remarque" required>
			</div>
			<div >
				<input type="submit" value="AJOUTER" name="add" class="btn">
			</div>
		</fieldset>
		
	</form>



<script type="text/javascript" src="valide.js"></script>


  </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	<table class="reserv" >

		
		<tr >
			<caption>Le liste de la réservation</caption>
			<th>Numéro</th>
			
			<th>Nom de demandeur</th>
			<th>Mission</th>
			<th>Chauffeur</th>
			<th>Heure</th>
			<th>Lieu destination</th>
			
			<th>Remarque</th>
			<th>Action</th>
		
		</tr>
		<?php 
			foreach (reservation_RolesDAO::listData($val) as $row) {			
							
		 ?>
		 <tr style="border: none;">
		 	<td style="background-color: rgb(0,88,176); color: white"><?php echo $row['numRes'] ; ?></td>
		 	<td><?php echo $row['prenomDem'] ; ?></td>
		 	<td width="350"><?php echo $row['mission'] ; ?></td>
		 	<td><?php echo $row['prenomChauff']; ?></td>
		 	<td width="80"><?php echo $row['tempDepar'] ; ?>h à <?php echo $row['tempArriv'] ; ?>h </td>
		 	<td><?php echo $row['lieuArriv'] ; ?></td>
		 	
		 	<td width="350"><?php echo $row['remarque'] ; ?></td>
		 	
		 	<td style="background-color:rgb(251,36,68);margin-left: 2px;margin-right: 2px;text-decoration: none;border-radius: 5px;">
		 		
		 		<a style="text-decoration:none; color:white;padding-left: 5px;padding-right: 5px;" href="../../Routeur/reservDel.php?numid=<?php echo $row['numRes']; ?>& j=<?php echo $row['numDemand']; ?>& dure=<?php echo $row['idDuree'] ?>& k=<?php echo $id; ?>& ver=<?php echo "reser"; ?>& name=<?php echo $admin ?>& job=<?php echo $job ?>& val=<?php echo $val ?>"> Supprimer</a>
		 	</td>
		 </tr>

	<?php 
			
		}	
	 ?>
	</table>
<br><br><br>

<div style=" "; class="tab">
 <fieldset class="fieldset_tab" style="">
	<legend class="legend_tab" style=""> Planning Chauffeur</legend>

<div border="0" style=""  class="tab1">
		
				<table class="lundi">
					<caption>Lundi</caption>
				<tr style="" class="lunditr">
					<th>Véhicule</th>
					<th>7</th>
					<th>8</th>
					<th>9</th>
					<th>10</th>
					<th>11</th>
					<th>12</th>
					<th>13</th>
					<th>14</th>
					<th>15</th>
					<th>16</th>
					<th>17</th>
					<th>18</th>
					<th>19</th>
					<th>20</th>
					

				</tr>
		<?php 
		
			foreach (Lundi_RolesDAO::listData($val) as $res1) {
				
			?>
			
			<tr style="border: none;">
				<td><?php echo $res1['vehicule']; ?></td>
				<td><?php echo $res1['n7']; ?></td>
				<td><?php echo $res1['n8']; ?></td>
				<td><?php echo $res1['n9']; ?></td>
				<td><?php echo $res1['n10']; ?></td>
				<td><?php echo $res1['n11']; ?></td>
				<td><?php echo $res1['n12']; ?></td>
				<td><?php echo $res1['n13']; ?></td>
				<td><?php echo $res1['n14']; ?></td>
				<td><?php echo $res1['n15']; ?></td>
				<td><?php echo $res1['n16']; ?></td>
				<td><?php echo $res1['n17']; ?></td>
				<td><?php echo $res1['n18']; ?></td>
				<td><?php echo $res1['n19']; ?></td>
				<td><?php echo $res1['n20']; ?></td>
				
			</tr>

			<?php 
				}

			 ?>

				</table>
				
			

			
				<table class="mardi">
				<caption>Mardi</caption>
				<tr style="" class="marditr">
					<th>Véhicule</th>
					<th>7</th>
					<th>8</th>
					<th>9</th>
					<th>10</th>
					<th>11</th>
					<th>12</th>
					<th>13</th>
					<th>14</th>
					<th>15</th>
					<th>16</th>
					<th>17</th>
					<th>18</th>
					<th>19</th>
					<th>20</th>
					

				</tr>

			
			<?php 
		
			foreach (Mardi_RolesDAO::listData($val) as $res1) {
				
			?>
			
			<tr style="border: none;">
				<td><?php echo $res1['vehicule']; ?></td>
				<td><?php echo $res1['n7']; ?></td>
				<td><?php echo $res1['n8']; ?></td>
				<td><?php echo $res1['n9']; ?></td>
				<td><?php echo $res1['n10']; ?></td>
				<td><?php echo $res1['n11']; ?></td>
				<td><?php echo $res1['n12']; ?></td>
				<td><?php echo $res1['n13']; ?></td>
				<td><?php echo $res1['n14']; ?></td>
				<td><?php echo $res1['n15']; ?></td>
				<td><?php echo $res1['n16']; ?></td>
				<td><?php echo $res1['n17']; ?></td>
				<td><?php echo $res1['n18']; ?></td>
				<td><?php echo $res1['n19']; ?></td>
				<td><?php echo $res1['n20']; ?></td>

			</tr>

			<?php 
				}

			 ?>


				</table>
				
			
				<table class="mercredi" >

					<caption>Mercredi</caption>
			
				<tr style="" class="mercreditr">
					<th>Véhicule</th>
					<th>7</th>
					<th>8</th>
					<th>9</th>
					<th>10</th>
					<th>11</th>
					<th>12</th>
					<th>13</th>
					<th>14</th>
					<th>15</th>
					<th>16</th>
					<th>17</th>
					<th>18</th>
					<th>19</th>
					<th>20</th>
					

				</tr>

			
			<?php 
		
			foreach (Mercredi_RolesDAO::listData($val) as $res1) {
				
			?>
			
			<tr style="border: none;">
				<td><?php echo $res1['vehicule']; ?></td>
				<td><?php echo $res1['n7']; ?></td>
				<td><?php echo $res1['n8']; ?></td>
				<td><?php echo $res1['n9']; ?></td>
				<td><?php echo $res1['n10']; ?></td>
				<td><?php echo $res1['n11']; ?></td>
				<td><?php echo $res1['n12']; ?></td>
				<td><?php echo $res1['n13']; ?></td>
				<td><?php echo $res1['n14']; ?></td>
				<td><?php echo $res1['n15']; ?></td>
				<td><?php echo $res1['n16']; ?></td>
				<td><?php echo $res1['n17']; ?></td>
				<td><?php echo $res1['n18']; ?></td>
				<td><?php echo $res1['n19']; ?></td>
				<td><?php echo $res1['n20']; ?></td>

			</tr>

			<?php 
				}

			 ?>

				</table>
	</div>

	<div border="0" style=""  class="tab2">
				
			</th>
			<th>
				<table class="jeudi">
					<caption>Jeudi</caption>
			
			<tr style="" class="jeuditr">
					<th>Véhicule</th>
					<th>7</th>
					<th>8</th>
					<th>9</th>
					<th>10</th>
					<th>11</th>
					<th>12</th>
					<th>13</th>
					<th>14</th>
					<th>15</th>
					<th>16</th>
					<th>17</th>
					<th>18</th>
					<th>19</th>
					<th>20</th>
					

				</tr>

			
				<?php 
		
			foreach (Jeudi_RolesDAO::listData($val) as $res1) {
				
			?>
			
			<tr style="border: none;">
				<td><?php echo $res1['vehicule']; ?></td>
				<td><?php echo $res1['n7']; ?></td>
				<td><?php echo $res1['n8']; ?></td>
				<td><?php echo $res1['n9']; ?></td>
				<td><?php echo $res1['n10']; ?></td>
				<td><?php echo $res1['n11']; ?></td>
				<td><?php echo $res1['n12']; ?></td>
				<td><?php echo $res1['n13']; ?></td>
				<td><?php echo $res1['n14']; ?></td>
				<td><?php echo $res1['n15']; ?></td>
				<td><?php echo $res1['n16']; ?></td>
				<td><?php echo $res1['n17']; ?></td>
				<td><?php echo $res1['n18']; ?></td>
				<td><?php echo $res1['n19']; ?></td>
				<td><?php echo $res1['n20']; ?></td>

			</tr>

			<?php 
				}

			 ?>


				</table>
				
			</th>
			<th>
				<table class="vendredi">
					<caption>Vendredi</caption>
			
				<tr style="" class="vendreditr">
					<th>Véhicule</th>
					<th>7</th>
					<th>8</th>
					<th>9</th>
					<th>10</th>
					<th>11</th>
					<th>12</th>
					<th>13</th>
					<th>14</th>
					<th>15</th>
					<th>16</th>
					<th>17</th>
					<th>18</th>
					<th>19</th>
					<th>20</th>
					

				</tr>
			
				<?php 
		
			foreach (Vendredi_RolesDAO::listData($val) as $res1) {
				
			?>
			
			<tr style="border: none;">
				<td><?php echo $res1['vehicule']; ?></td>
				<td><?php echo $res1['n7']; ?></td>
				<td><?php echo $res1['n8']; ?></td>
				<td><?php echo $res1['n9']; ?></td>
				<td><?php echo $res1['n10']; ?></td>
				<td><?php echo $res1['n11']; ?></td>
				<td><?php echo $res1['n12']; ?></td>
				<td><?php echo $res1['n13']; ?></td>
				<td><?php echo $res1['n14']; ?></td>
				<td><?php echo $res1['n15']; ?></td>
				<td><?php echo $res1['n16']; ?></td>
				<td><?php echo $res1['n17']; ?></td>
				<td><?php echo $res1['n18']; ?></td>
				<td><?php echo $res1['n19']; ?></td>
				<td><?php echo $res1['n20']; ?></td>

			</tr>

			<?php 
				}

			 ?>


				</table>
				
			</th>
			<th>
				<table class="samedi">
					<caption>Samedi</caption>
			
				<tr style="" class="sameditr">
					<th>Véhicule</th>
					<th>7</th>
					<th>8</th>
					<th>9</th>
					<th>10</th>
					<th>11</th>
					<th>12</th>
					<th>13</th>
					<th>14</th>
					<th>15</th>
					<th>16</th>
					<th>17</th>
					<th>18</th>
					<th>19</th>
					<th>20</th>
					

				</tr>
			
				<?php 
		
			foreach (Samedi_RolesDAO::listData($val) as $res1) {
				
			?>
			
			<tr style="border: none;">
				<td><?php echo $res1['vehicule']; ?></td>
				<td><?php echo $res1['n7']; ?></td>
				<td><?php echo $res1['n8']; ?></td>
				<td><?php echo $res1['n9']; ?></td>
				<td><?php echo $res1['n10']; ?></td>
				<td><?php echo $res1['n11']; ?></td>
				<td><?php echo $res1['n12']; ?></td>
				<td><?php echo $res1['n13']; ?></td>
				<td><?php echo $res1['n14']; ?></td>
				<td><?php echo $res1['n15']; ?></td>
				<td><?php echo $res1['n16']; ?></td>
				<td><?php echo $res1['n17']; ?></td>
				<td><?php echo $res1['n18']; ?></td>
				<td><?php echo $res1['n19']; ?></td>
				<td><?php echo $res1['n20']; ?></td>

			</tr>

			<?php 
				}

			 ?>
				</table>

		</div>
		<div border="0" style="" class="tab3">
				
			</th>
			<th>
				<table class="dimanche">
					<caption>Dimanche</caption>
			
				<tr style="" class="dimanchetr">
					<th>Véhicule</th>
					<th>7</th>
					<th>8</th>
					<th>9</th>
					<th>10</th>
					<th>11</th>
					<th>12</th>
					<th>13</th>
					<th>14</th>
					<th>15</th>
					<th>16</th>
					<th>17</th>
					<th>18</th>
					<th>19</th>
					<th>20</th>
					

				</tr>

			
				<?php 
		
			foreach (Dimanche_RolesDAO::listData($val) as $res1) {
				
			?>
			
			<tr style="border: none;">
				<td><?php echo $res1['vehicule']; ?></td>
				<td><?php echo $res1['n7']; ?></td>
				<td><?php echo $res1['n8']; ?></td>
				<td><?php echo $res1['n9']; ?></td>
				<td><?php echo $res1['n10']; ?></td>
				<td><?php echo $res1['n11']; ?></td>
				<td><?php echo $res1['n12']; ?></td>
				<td><?php echo $res1['n13']; ?></td>
				<td><?php echo $res1['n14']; ?></td>
				<td><?php echo $res1['n15']; ?></td>
				<td><?php echo $res1['n16']; ?></td>
				<td><?php echo $res1['n17']; ?></td>
				<td><?php echo $res1['n18']; ?></td>
				<td><?php echo $res1['n19']; ?></td>
				<td><?php echo $res1['n20']; ?></td>

			</tr>

			<?php 
				}

			 ?>


				</table>
				
			</th>



		</tr>



	</div>

</fieldset>

</div>


</div>
<br><br>
	
</body>

</html>
<?php 

require_once('../../session-verif.php');
require_once('../../session2-verif.php');

include_once '../../dao/vehiculeDao/vehicule.dao.php';

ini_set("display_errors", "off");
$id=$_GET['i'];
$v=$_GET['v'];
$admin=$_GET['name'];
$job=$_GET['job'];

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Vehicule</title>
</head>
<link rel="stylesheet" type="text/css" href="../../Public/css/menu/menu.css">
<link rel="stylesheet" type="text/css" href="../../Public/css/animation.css">
<link rel="stylesheet" type="text/css" href="../../Public/css/vehicule/vehicule_edit.css">

<style type="text/css">

</style>

<script src='../../node_modules/sweetalert/dist/sweetalert.min.js'></script>
<script type='text/javascript' src='../../Public/script/alert.js'></script>

<body >
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
	<img src="../../Public/img/poiss.jpg" class="img_poiss" style=" ">
</div>
<a href="http://localhost:8080/projet%20php/deconnect.php" class="deconnect" style="">
	<img src="../../Public/img/logout.png" class="img_logout" style=""> <div> Deconnecter</div>
</a>

	  <div class="titre">
	Liste des véhicules
	</div>

	<div class="fbody">

	<div class="champ">
		<div class="info1">Ajouter un véhicule</div>
	<form action="../../Routeur/editVehicule.php?v=<?php echo $v ?>&i=<?php echo $id ?>&name=<?php echo $admin ?>&job=<?php echo $job ?>" method="post">
		<fieldset style="border-color:rgb(0,128,255);border-radius: 5px; ">
<?php 
	
	foreach(Vehicule_RolesDAO::oneData($_GET['v']) as $valeur){

 ?>
			<div >
				
				<input type="text" name="numVoi" value="<?= $valeur['numVehicule'] ?>" style="font-size: 12px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px;" required>
			</div>
			<div >
				
				<input type="text" name="typeVoi" value="<?= $valeur['type'] ?>" style="font-size: 12px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px;" required>
			</div>

			<div >
				
				<input type="text" name="marqVoi" value="<?= $valeur['marque'] ?>" style="font-size: 12px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px;" required>
			</div>

			<div >
				<input type="submit" value="Confirmer" name="edit" style="font-size: 15px;margin:16px;padding: 10px;border-radius: 6px;border-width: 1; background-color: rgb(0,128,255);width: 320px; border:none; color: white;">
			</div>
	<?php } ?>
		</fieldset>
		
	</form>

	</div>


	<table class="tab">
		<tr><caption>Liste des véhicule</caption>
			<th style="width: 100px;">Numéro</th>
			<th>Type</th>
			<th>Marque</th>
			<th style="width: 200px;">Action</th>
			
		</tr>
		<?php 
			foreach (Vehicule_RolesDAO::listData() as $val) {
				
		 ?>
		 <tr>
		 	<td><?= $val['numVehicule'] ; ?></td>
		 	<td><?= $val['type'] ; ?></td>
		 	<td><?= $val['marque'] ; ?></td>
		 	<td>
		 		<a class="a2" href="http://localhost:8080/projet%20php/view/vehicule_view/vehiculeEdit_view.php?i=<?php echo $id; ?> &v=<?= $val['idVehicule'] ; ?>">  Editer</a>
		 		<a class="a1" href="../../Routeur/delete_Vehicule.php?i=<?php echo $id; ?> &v=<?= $val['idVehicule'] ; ?>&name=<?php echo $admin ?>& job=<?php echo $job ?>">Supprimer</a>
		 	</td>
		 </tr>
	<?php 
		}
	
	 ?>


	</table>
	
	</div>
</body>

</html>
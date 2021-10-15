<?php 

require_once '../../dao/DemandeurDao/Demandeur.dao.php';

//ini_set('display_errors','off');
$id=$_GET['i'];
$admin=$_GET['name'];
$job=$_GET['job'];

$con=mysqli_connect("localhost","root","","park");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Demandeur</title>
</head>

<link rel="stylesheet" type="text/css" href="../../Public/css/reservation/styleReser.css" />
<link rel="stylesheet" type="text/css" href="../../Public/css/animation.css">
<link rel="stylesheet" type="text/css" href="../../Public/css/demandeur/demande_editPlus.css">

<style type="text/css">
	

</style>
<script src='../../node_modules/sweetalert/dist/sweetalert.min.js'></script>
<script type='text/javascript' src='../../Public/script/alert.js'></script>
<script type='text/javascript' src='../../Public/script/verif.js'></script>

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
<div class="titre">
	Modifiez les informations sur vous
</div>


	<?php 
}
elseif ($job=="chauffeur") {	
	 ?>

	<div class="menu-bar">
	<ul>
		<li class="demande" onclick="popUp()" ><img src="../../Public/img/demande.png" style="width: 50px;height: 50px;">Demandeur</li>
		<li class="chauffeur"><img src="../../Public/img/cha.png" style="width: 50px;height: 50px;"><a href="http://localhost:8080/projet%20php/view/chauffeur_view/chauffeur_view.php">Chauffeur</a></li>
		<li class="vehicule"><img src="../../Public/img/car.png" style="width: 50px;height: 50px;"><a href="http://localhost:8080/projet%20php/view/vehicule_view/vehicule_view.php">Véhicule</a></li>
		<li class="reservaton"><img src="../../Public/img/reserv.png" style="width: 50px;height: 50px;"><a href="http://localhost:8080/projet%20php/view/reservation_view/validereserve_view.php">Réservation</a></li>
		<li class="table"><img src="../../Public/img/new.png" style="width: 50px;height: 50px;"><a href="http://localhost:8080/projet%20php/view/reservation_view/newtable_view.php">Nouvelle table</a></li>
			
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




<div class="titre">
	Modifiez les informations des demandeurs

	<form action="" class="date_recherche"  method="post"><input type="submit" class="submit_recherche" name="recherche_demandeur" value="Rechercher demandeur"> <input type="text" name="val_recherche" placeholder=" nom ou prénom" class="input_date" required>
		<a href="http://localhost:8080/projet%20php/view/demandeur_view/demandeur_view.php"> <img class="annule" src="../../Public/img/annuler.png"> </a>
		</form>
</div>

	 <?php 
	 }
	  ?>

	  <div>
	<img src="../../Public/img/poiss.jpg" class="poiss_img" style=" ">
</div>
<a href="http://localhost:8080/projet%20php/deconnect.php" class="deconnect_img" style="   ">
	<img src="../../Public/img/logout.png" class="logout_img" style=""> <div> Deconnecter</div>
</a>

<div class="fbody">

	<div class="champ">

		<div class="info1">Modifier un demandeur</div>

	<?php 
		foreach (Demandeur_RolesDAO::OneData($_GET['in']) as $valu) {

		 ?>


	<form action="../../Routeur/editDemandeur.php?i=<?= $valu['numDemand'] ?>&name=<?php echo $admin ?>&job=<?php echo $job?>" method="post" class="form_demandeur">		
		
		<fieldset  style="border: none; ">
			<div >
				
				<input type="text" name="nomDe" value="<?= $valu['nomDem'] ?>" style="font-size: 12px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px;text-transform: uppercase;" onkeyup="verif_Char(this)" required>
			</div>

			<div >
				
				<input type="text" name="prenomDe"  value="<?= $valu['prenomDem'] ?>" onkeyup="verif_Maj(this)" style="font-size: 12px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px;" required>
			</div>

			<div >
				
				<input type="text" name="surnomDe"  value="<?= $valu['surnomDem'] ?>" onkeyup="verif_Space(this)" style="font-size: 12px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px;" required>
			</div>
			<div >
				
				<input type="password" name="motpass"  value="<?= $valu['motpassDem'] ?>" style="font-size: 12px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px;" required>
			</div>

			<div >
				<input type="submit" value="Modifier" name="edit" style="font-size: 15px;margin:18px;padding: 10px;border-radius: 6px;border-width: 1; background-color: rgb(0,128,255);width: 160px; border:none; color: white;">

				<a href="http://localhost:8080/projet%20php/view/demandeur_view/demandeur_view.php" style="font-size: 15px;margin:0px;padding-top: 10px;padding-bottom: 10px;padding-left: 40px;padding-right: 40px;border-radius: 6px;border-width: 1; background-color: rgb(0,128,255);width: 160px; border:none; color: white; text-decoration: none;">Annuler</a>
			</div>
		</fieldset>
		
	</form>
<?php 
}
 ?>
	
		
	</div>


	<table class="tab">
		<tr><caption>Liste des demandeurs</caption>
			
			<th>Nom</th>
			<th>Prénom</th>
			<th>Surnom</th>
			<th>Mot de passe</th>
			<th style="width: 200px;">Action</th>	
			
		</tr>
			<?php 
		 	if (isset($_POST["recherche_demandeur"])) {
		 		$deman = $_POST['val_recherche'];

		 		foreach (Demandeur_RolesDAO::recherche_data($deman) as $val) {
		 		?>
		  <tr>
		 		<td><?= $val['nomDem'] ?></td>
		 	<td><?= $val['prenomDem'] ?></td>
		 	<td><?= $val['surnomDem'] ?></td>
		 	<td><?= $val['motpassDem'] ?></td>

		 	<td>
		 		<a class="a2" href="demandeEdit_view.php?in=<?= $val['numDemand']; ?>&i=<?php echo $id ?>& name=<?php echo $admin ?>&job=<?php echo $job ?>">Editer</a>
		 		<a class="a1" href="../../Routeur/delete_Demandeur.php?i=<?= $val['numDemand'] ; ?>& name=<?php echo $admin ?>&job=<?php echo $job ?>">Supprimer</a>
		 	</td>
		 		<?php
		 		} 
		 	}
		 	elseif (!isset($POST["recherche_demandeur"])) {
		 		foreach (Demandeur_RolesDAO::listData() as $val) {
		 		?>
		 	<td><?= $val['nomDem'] ?></td>
		 	<td><?= $val['prenomDem'] ?></td>
		 	<td><?= $val['surnomDem'] ?></td>
		 	<td><?= $val['motpassDem'] ?></td>

		 	<td>
		 		<a class="a2" href="demandeEdit_view.php?in=<?= $val['numDemand']; ?>&i=<?php echo $id ?>& name=<?php echo $admin ?>&job=<?php echo $job ?>">Editer</a>
		 		<a class="a1" href="../../Routeur/delete_Demandeur.php?i=<?= $val['numDemand'] ; ?>& name=<?php echo $admin ?>&job=<?php echo $job ?>">Supprimer</a>
		 	</td>
		  </tr>
		 		<?php 
		 	}
		 	}
		 	 ?>

	</table>


	
</body>

</div>

</html>
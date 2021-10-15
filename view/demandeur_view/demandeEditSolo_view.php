<?php 

include_once '../../dao/DemandeurDao/Demandeur.dao.php';

ini_set('display_errors','off');
$id=$_GET['i'];
$admin=$_GET['name'];
$job=$_GET['job'];


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Demandeur</title>
</head>

<link rel="stylesheet" type="text/css" href="../../Public/css/reservation/styleReser.css" />
<link rel="stylesheet" type="text/css" href="../../Public/css/animation.css">
<link rel="stylesheet" type="text/css" href="../../Public/css/demandeur/demande_editSolo.css">


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




<div class="titre">
	Modifiez les informations des demandeurs
</div>

	 <?php 
	 }
	  ?>
	  <div>
	<img src="../../Public/img/poiss.jpg" class="poiss_img" style=" ">
</div>
<a href="http://localhost:8080/projet%20php/deconnect.php" class="deconnect" style="  ">
	<img src="../../Public/img/logout.png" class="logout_img" style=""> <div> Deconnecter</div>
</a>

<div class="fbody">


	<div class="champ1">
	<form action="../../Routeur/editDemandeur.php?i=<?= $id ?>&name=<?php echo $admin; ?>&job=<?php echo $job; ?>" method="post">
		<div class="info">Modifiez l'information</div>
		<fieldset style="border-color:rgb(0,128,255);border-radius: 5px; ">
			<?php 
				
				 foreach(Demandeur_RolesDAO::oneData($_GET['i']) as $val){
				 	?>
				 <div >
				<label>	Nom : </label>
				<input type="text" style="padding: 11px;margin-left: 67px;font-size: 18px;border:solid; border-width: 1px;border-color: rgba(0,0,0,0.5);border-radius: 3px; width: 300px;margin-bottom: 5px;" onkeyup="verif_Char(this)" name="nomDe" value="<?= $val['nomDem'] ?>" required>
			</div>

			<div >
				<label>Prénom : </label> 
				<input type="text" style="padding: 11px;margin-left: 45px;font-size: 18px;border:solid; border-width: 1px;border-color: rgba(0,0,0,0.5);border-radius: 3px;width: 300px;margin-bottom: 5px;" onkeyup="verif_Maj(this)" name="prenomDe" value="<?= $val['prenomDem'] ?>" required>
			</div>

			<div >
				<LABEL>Surnom : </LABEL> 
				<input type="text" style="padding: 11px;margin-left: 45px;font-size: 18px;border:solid; border-width: 1px;border-color: rgba(0,0,0,0.5);border-radius: 3px;width: 300px;margin-bottom: 5px;" onkeyup="verif_Space(this)" name="surnomDe" value="<?= $val['surnomDem'] ?>" required>
			</div>
			<div >
				<LABEL>Mot de passe : </LABEL> 
				<input type="password" style="padding: 11px;margin-left: 4px;font-size: 18px;width: 300px;border:solid; border-width: 1px;border-color: rgba(0,0,0,0.5);border-radius: 3px;" name="motpass" value="<?= $val['motpassDem'] ?>" required>
			</div>
<br>
			<div >
				<input type="submit" name="edit" value="Confirmer" class="submit" style="">

			<?php 
				 }

			 ?>
			
							
			</div>
		</fieldset>
		
	</form>

	
		
	</div>
</div>

</body>

</html>
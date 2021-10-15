<?php 
require_once('../../session-verif.php');
require_once('../../session2-verif.php');
require_once '../../dao/chauffeurDao/Roles.dao.php';

//ini_set("display_errors", "off");


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Chauffeur</title>
</head>

<link rel="stylesheet" type="text/css" href="../../Public/css/menu/menu.css">
<link rel="stylesheet" type="text/css" href="../../Public/css/chauffeur/chauffeur_editSolo.css">
<link rel="stylesheet" type="text/css" href="../../Public/css/animation.css">
<script type='text/javascript' src='../../Public/script/verif.js'></script>

<style type="text/css">
	

</style>
<script src='../../node_modules/sweetalert/dist/sweetalert.min.js'></script>
<script type='text/javascript' src='../../Public/script/alert.js'></script>

<body>
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

<div class="titre">
	Les informations sur vous
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
	Listes des Chauffeurs
</div>

	 <?php 
	 }
	  ?>

<div>
	<img src="../../Public/img/poiss.jpg" class="img_poisson" style=" ">
</div>
<a href="http://localhost:8080/projet%20php/deconnect.php" class="deconnect" style="  ">
	<img src="../../Public/img/logout.png" class="img_logout"> <div> Deconnecter</div>
</a>

<div class="fbody">

	<div class="champ1">
		<form action="../../Routeur/editChauffeur.php?i=<?= $id ?>&name=<?php echo $admin ?>&job=<?php echo $job?>" method="post" >
				<div class="info">Information sur vous</div>
			<fieldset class="fieldset_chauffeur" style="">
				<?php 
			foreach(RolesDAO::oneData($_GET['i']) as $valu){
				?>

				<div >
				<label>	Nom : </label>
				<input type="text" class="nom_chauffeur" style="padding: 11px;margin-left: 65px;font-size: 18px;border:solid; border-width: 1px;border-color: rgba(0,0,0,0.5);border-radius: 3px;width: 310px;margin-bottom: 5px;" name="nomChauf" value="<?= $valu['nomChauff'] ?>" onkeyup="verif_Char(this)" required >
			</div>

			<div >
				<label>Prénom : </label> 
				<input type="text" class="prenom_chauffeur" style="padding: 11px;margin-left: 45px;font-size: 18px;border:solid; border-width: 1px;border-color: rgba(0,0,0,0.5);border-radius: 3px;width: 310px;margin-bottom: 5px;" name="prenomChauf" value="<?= $valu['prenomChauff'] ?>" onkeyup="verif_Maj(this)" required>
			</div>

			<div >
				<LABEL>Surnom : </LABEL> 
				<input type="text" class="surnom_chauffeur" style="padding: 11px;margin-left: 45px;font-size: 18px;border:solid; border-width: 1px;border-color: rgba(0,0,0,0.5);border-radius: 3px;width: 310px;margin-bottom: 5px;" name="surnomChauf" value="<?= $valu['surnomChauff'] ?>" onkeyup="verif_Space(this)" required>
			</div>
			<div >
				<LABEL> Mot de passe : </LABEL> 
				<input type="password" class="motpass_chauffeur" style="padding: 11px;margin-left: 3px;font-size: 18px;border:solid; border-width: 1px;border-color: rgba(0,0,0,0.5);border-radius: 3px;width: 310px;margin-bottom: 5px;" name="motpass" value="<?= $valu['motpassChauff'] ?>" required>
			</div>

	<br><br>
				
				<input type="submit" name="edit" Value="Confirmer" class="submit" style="">

			<?php 
				}
				
			 ?>
		
				
		<br>
			</fieldset>
		
	</form>

	</div>

	</div>	

</body>

</html>
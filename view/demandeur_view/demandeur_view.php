<?php 
require_once('../../session-verif.php');
require_once('../../session2-verif.php');

require_once(realpath(dirname(__FILE__)) . '/../../dao/DemandeurDao/Demandeur.dao.php');


ini_set('display_errors','off');



$con;


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Demandeur</title>
</head>
<link rel="stylesheet" type="text/css" href="../../Public/css/reservation/styleReser.css" />
<link rel="stylesheet" type="text/css" href="../../Public/css/animation.css">
<link rel="stylesheet" type="text/css" href="../../Public/css/demandeur/demandeur.css">

<script type='text/javascript' src='../../Public/script/verif.js'></script>
<style type="text/css">

</style>

<script src='../../node_modules/sweetalert/dist/sweetalert.min.js'></script>
<script type='text/javascript' src='../../Public/script/alert.js'></script>
<script type='text/javascript' src='../../Public/script/alert2.js'></script>

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

<div class="titre0">
	Les informations sur vous
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
	Listes des demandeurs

		<form action="" class="date_recherche"  method="post"><input type="submit" class="submit_recherche" name="recherche_demandeur" value="Rechercher demandeur"> <input type="text" name="val_recherche" placeholder=" nom ou prénom" class="input_date" required>
		<a href="http://localhost:8080/projet%20php/view/demandeur_view/demandeur_view.php"> <img class="annule" src="../../Public/img/annuler.png"> </a>
		</form>
</div>

	 <?php 
	 }
	  ?>

	  
<div>
	<img src="../../Public/img/poiss.jpg" class="img_poisson" style=" ">
</div>
<a href="http://localhost:8080/projet%20php/deconnect.php" class="deconnect" style="  ">
	<img src="../../Public/img/logout.png" class="img_logout" style=""> <div> Deconnecter</div>
</a>


<div class="fbody">
<?php 
	if ($admin=="admin") {

 ?>

	<div class="champ">
		<div class="info1">Ajouter un demandeur</div>

	<form action="../../Routeur/addDemandeur.php?i=<?php echo $id ?>&name=<?php echo $admin ?>&job=<?php echo $job ?>" method="post" class="form_demandeur">
		<fieldset style="border: none;">
			<div >
				
				<input type="text" name="nom" placeholder="Saisir nom" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px; font-size: 12px" onkeyup="verif_Char(this)" required>
			</div>

			<div >
				
				<input type="text" name="pnom" placeholder="Saisir prenom" onkeyup="verif_Maj(this)" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px;font-size: 12px" required>
			</div>

			<div >
				
				<input type="text" name="snom" placeholder="Saisir surnom" onkeyup="verif_Space(this)" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px;font-size: 12px" required>
			</div>
			<div >
				
				<input type="password" name="motpass" placeholder="Saisir mot de passe" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px;font-size: 12px" required>
			</div>

			<div >
				<input type="submit" value="ajouter" name="add" style="font-size: 20px;margin:16px;padding: 10px;border-radius: 6px;border-width: 1; background-color: rgb(0,128,255);width: 320px; border:none; color: white;font-size: 12px" required>
			</div>
		</fieldset>
		
	</form>

	<?php 

		

	 ?>
		
	</div>

	<table class="tab">
		
			
		<caption>Liste des demandeurs</caption>
		<tr>
			

		
			<th>Nom</th>
			<th>Prénom</th>
			<th>Surnom</th>
			<th>Mot de passe</th>
			<th style="width: 200px;">Action</th>	
			
		</tr>
		<?php 
		
							
		 ?>
		
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


	

<?php 

}
	else{

	?>
	
		<div class="champ1">
	<form action="" method="post">
		<div class="info">Information sur vous</div>
		<fieldset style="border-color:rgb(0,128,255);border-radius: 5px; ">
			<?php 
				
				foreach(Demandeur_RolesDAO::oneData($id) as $valu){
					?>
				<div >
				<label>	Nom : </label>
				<input type="text" style="padding: 11px;margin-left: 67px;font-size: 18px;border:solid; border-width: 1px;border-color: rgba(0,0,0,0.5);border-radius: 3px; width: 300px;margin-bottom: 5px;" name="nom" value="<?= $valu['nomDem'] ?>" readonly onclick="popUp_champ()">
			</div>

			<div >
				<label>Prénom : </label> 
				<input type="text" style="padding: 11px;margin-left: 45px;font-size: 18px;border:solid; border-width: 1px;border-color: rgba(0,0,0,0.5);border-radius: 3px;width: 300px;margin-bottom: 5px;" name="pnom" value="<?= $valu['prenomDem'] ?>" readonly onclick="popUp_champ()">
			</div>

			<div >
				<LABEL>Surnom : </LABEL> 
				<input type="text" style="padding: 11px;margin-left: 45px;font-size: 18px;border:solid; border-width: 1px;border-color: rgba(0,0,0,0.5);border-radius: 3px;width: 300px;margin-bottom: 5px;" name="snom" value="<?= $valu['surnomDem'] ?>" readonly onclick="popUp_champ()">
			</div>
			<div >
				<LABEL> Mot de passe : </LABEL> 
				<input type="password" style="padding: 11px;margin-left: 4px;font-size: 18px;width: 300px;border:solid; border-width: 1px;border-color: rgba(0,0,0,0.5);border-radius: 3px;" name="motpass" value="<?= $valu['motpassDem'] ?>" readonly onclick="popUp_champ()">
			</div>
<br><br>
			<div >
				<a href="demandeEdit_view.php?i=<?php echo $id ?>& name=<?php echo $admin ?> & job=<?php echo $job ?>" class="btn_modif" style=" "> Passé à la modification </a>
				
				<a href="../../Routeur/delete_Demandeur.php?i=<?= $id ; ?>& name=<?php echo $admin ?>&job=<?php echo $job ?>" class="btn_supprim" style=" ">Supprimer</a>
				
			</div>

			<?php 
				}
			 ?>
			
<br>

		</fieldset>
		
	</form>

	
		
	</div>


	

<?php 
	}
 ?>
			
	</div>
</body>

</html>
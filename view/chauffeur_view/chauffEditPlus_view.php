<?php 
require_once('../../session-verif.php');
require_once('../../session2-verif.php');
require_once '../../dao/chauffeurDao/Roles.dao.php';

ini_set("display_errors", "off");


include_once('../connection.php');
$con;


$obj = new RolesDAO;

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Chauffeur</title>
</head>
<link rel="stylesheet" type="text/css" href="../../Public/css/chauffeur/chauffeur_editPlus.css">
<link rel="stylesheet" type="text/css" href="../../Public/css/menu/menu.css">
<link rel="stylesheet" type="text/css" href="../../Public/css/animation.css">

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
	Modifier le informations sur vous
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
	Modifier les informations sur les chauffeurs

	<form action="" class="date_recherche"  method="post"><input type="submit" class="submit_recherche" name="recherche_chauffeur" value="Rechercher chauffeur"> <input type="text" name="val_recherche" placeholder=" nom ou prénom" class="input_date" required>
		<a href="http://localhost:8080/projet%20php/view/chauffeur_view/chauffeur_view.php"> <img class="annule" src="../../Public/img/annuler.png"> </a>
		</form>
</div>

	 <?php 
	 }
	  ?>

	  <div>
	<img src="../../Public/img/poiss.jpg" class="img_poisson" style=" ">
</div>
<a href="http://localhost:8080/projet%20php/deconnect.php" class="deconnect" style="   ">
	<img src="../../Public/img/logout.png" class="img_logout" style=""> <div> Deconnecter</div>
</a>

<div class="fbody">

<?php 
	

		foreach ($obj->OneData($_GET['in']) as $valu) {  
 ?>

	<div class="champ">
		<div class="info1">Modifiez un chauffeur</div>

	<form action="../../Routeur/editChauffeur.php?i=<?= $valu['idChauff'] ?>&name=<?php echo $admin ?>&job=<?php echo $job?>"  method="post" class="form_chauffeur" style=" ">

			<div >
				<input type="text" name="nomChauf" value="<?= $valu['nomChauff'] ?>" class="nom_chauffeur" onkeyup="verif_Char(this)" style="" required>
			</div>
			<div >
				<input type="text" name="prenomChauf" value="<?= $valu['prenomChauff'] ?>" class="prenom_chauffeur" onkeyup="verif_Maj(this)" style="" required>
			</div>

			<div >
				<input type="text" name="surnomChauf" value="<?= $valu['surnomChauff'] ?>" onkeyup="verif_Space(this)" class="surnom_chauffeur" style="" required>
			</div>

			<div >
				<input type="password" name="motpass" value="<?= $valu['motpassChauff'] ?>" class="motpass" style="" required>
			</div>

			<div >
				<input type="submit" value="Modifier" name="edit" class="submit" style="" >

				<a href="http://localhost:8080/projet%20php/view/chauffeur_view/chauffeur_view.php" class="annuler_btn" style="">Annuler</a>
			</div>
		
		
	</form>

	</div>
	<?php 
	}
	 ?>


	<table class="tab">
		<tr><caption>Liste des chauffeurs</caption>
			
			<th>Nom</th>
			<th>Prénom</th>
			<th>Surnom</th>
			<th>Mot de passe</th>
			<th class="action" style="width: 200px;">Action</th>
			
		</tr>
		 <?php 
		 	$obj = new RolesDAO();
      if (isset($_POST['recherche_chauffeur'])) {
      	$chauffe = $_POST['val_recherche'];
      	foreach ($obj->recherche_chauffeur($chauffe) as $liste) {  
      ?>
       <tr>
    
      <td><?= $liste['nomChauff'] ; ?></td>
      <td><?= $liste['prenomChauff'] ; ?></td>
      <td><?= $liste['surnomChauff'] ; ?></td>
      <td><?= $liste['motpassChauff'] ; ?></td>
      
      <td>
        <a class="a2" href="chauffEdit_view.php?in=<?= $liste['idChauff']; ?>&i=<?php echo $id; ?>& name=<?php echo $admin ?>& job=<?php echo $job ?>">  Editer</a>
        <a class="a1" href="../../Routeur/delete_Chauffeur.php?i=<?= $liste['idChauff']; ?>& name=<?php echo $admin ?>& job=<?php echo $job ?>">Supprimer</a>
      </td>
     </tr>
  <?php }
        }
       elseif (!isset($_POST['recherche_chauffeur'])) {
       
       foreach ($obj->listData() as $liste) {  
      ?>
       <tr>
    
      <td><?= $liste['nomChauff'] ; ?></td>
      <td><?= $liste['prenomChauff'] ; ?></td>
      <td><?= $liste['surnomChauff'] ; ?></td>
      <td><?= $liste['motpassChauff'] ; ?></td>
      
      <td>
        <a class="a2" href="chauffEdit_view.php?in=<?= $liste['idChauff']; ?>&i=<?php echo $id; ?>& name=<?php echo $admin ?>& job=<?php echo $job ?>">  Editer</a>
        <a class="a1" href="../../Routeur/delete_Chauffeur.php?i=<?= $liste['idChauff']; ?>& name=<?php echo $admin ?>& job=<?php echo $job ?>">Supprimer</a>
      </td>
     </tr>
  <?php }
       }
                        
     ?>


	</table>

</div>	
	
</body>

</html>
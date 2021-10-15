<?php 
require_once('../../session-verif.php');
require_once('../../session2-verif.php');
require_once '../../dao/chauffeurDao/Roles.dao.php';



ini_set("display_errors", "off");


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Chauffeur</title>
</head>

<link rel="stylesheet" type="text/css" href="../../Public/css/menu/menu.css">
<link rel="stylesheet" type="text/css" href="../../Public/css/chauffeur/chauffeur.css">
<link rel="stylesheet" type="text/css" href="../../Public/css/animation.css">


<script src='../../node_modules/sweetalert/dist/sweetalert.min.js'></script>
<script type='text/javascript' src='../../Public/script/alert.js'></script>
<script type='text/javascript' src='../../Public/script/alert2.js'></script>
<script type='text/javascript' src='../../Public/script/verif.js'></script>

<style type="text/css">

</style>

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

<div class="titre0">
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
<a href="http://localhost:8080/projet%20php/deconnect.php" style="" class="deconnect">
	<img src="../../Public/img/logout.png" class="img_logout" style=""> <div> Deconnecter</div>
</a>
<div class="fbody">


<?php 
	if ($admin=="admin") {
		
 ?>
 
	<div class="champ">
<div class="info1">Ajouter un chauffeur</div>

		<form action="../../Routeur/insert_chauffeur.php?i=<?php echo $id; ?>&name=<?php echo $admin; ?>&job=<?php echo $job; ?>" method="post" class="form_chauffeur" style=" ">
			
		
			<div >
				<input type="text" name="nomChauf" placeholder="Saisir nom " class="nom_chauffeur" onkeyup="verif_Char(this)" style=" " required>
			</div>
			<div >
				<input type="text" name="prenomChauf" placeholder="Saisir prenom" class="prenom_chauffeur" onkeyup="verif_Maj(this)" style="" required>
			</div>

			<div >
				<input type="text" name="snomChauf" placeholder="Saisir surnom" onkeyup="verif_Space(this)" class="surnom_chauffeur" style="" required>
			</div>

			<div >
				<input type="password" name="motpass" placeholder="Saisir le mot de passe" class="motpass_chauffeur" style="" required>
			</div>

			<div >
				<input type="submit" value="AJOUTER" name="add" class="submit" style="">
			</div>	
		
	</form>


	</div>


	<table  class="tab">
		<tr><caption>Liste des chauffeurs</caption>
			
			<th>Nom</th>
			<th>Prénom</th>
			<th>Surnom</th>
			<th>Mot de passe</th>
			
			<th style="width: 200px;">Action</th>
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

<?php 

}
	else{

	?>

	<div class="champ1">
		<form action="" method="post" >
				<div class="info">Information sur vous</div>
			<fieldset class="fieldset_champ1" style="">
				<?php 
				foreach(RolesDAO::oneData($id) as $valu){
			?>
				<div >
				<label>	Nom : </label>
				<input type="text" class="nom_chauffeur_solo" style="padding: 11px;margin-left: 65px;font-size: 18px;border:solid; border-width: 1px;border-color: rgba(0,0,0,0.5);border-radius: 3px;width: 310px;margin-bottom: 5px;" name="nom" value="<?= $valu['nomChauff'] ?>" readonly  onclick="popUp_champ()">
			</div>

			<div >
				<label>Prénom : </label> 
				<input type="text" class="prenom_chauffeur_solo" style="padding: 11px;margin-left: 45px;font-size: 18px;border:solid; border-width: 1px;border-color: rgba(0,0,0,0.5);border-radius: 3px;width: 310px;margin-bottom: 5px;" name="pnom" value="<?= $valu['prenomChauff'] ?>" readonly  onclick="popUp_champ()">
			</div>

			<div >
				<LABEL>Surnom : </LABEL> 
				<input type="text" class="surnom_chauffeur_solo" style="padding: 11px;margin-left: 45px;font-size: 18px;border:solid; border-width: 1px;border-color: rgba(0,0,0,0.5);border-radius: 3px;width: 310px;margin-bottom: 5px;" name="snom" value="<?= $valu['surnomChauff'] ?>" readonly  onclick="popUp_champ()">
			</div>
			<div >
				<LABEL> Mot de passe : </LABEL> 
				<input type="password" class="motpass_chauffeur_solo" style="padding: 11px;margin-left: 3px;font-size: 18px;border:solid; border-width: 1px;border-color: rgba(0,0,0,0.5);border-radius: 3px;width: 310px;margin-bottom: 5px;" name="motpass" value="<?= $valu['motpassChauff'] ?>" readonly  onclick="popUp_champ()">
			</div>

	<br><br>
				<div >
					<a href="chauffEdit_view.php?i=<?php echo $id; ?>& name=<?php echo $admin ?>& job=<?php echo $job ?>" class="link_chauffEdit_view" style=" ">Passer à la modification</a>

					<a href="../../Routeur/delete_Chauffeur.php?i=<?php echo $id; ?>& name=<?php echo $admin ?>& job=<?php echo $job ?>" class="link_delete_chauffeur" style=" ">Supprimer</a>

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
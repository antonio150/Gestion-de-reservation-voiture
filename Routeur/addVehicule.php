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

<?php 
ini_set('display_errors','off');

$id = $_GET['i'];
$admin=$_GET['name'];
$job=$_GET['job'];

require_once ('../modele/gereDem.class.php');
require_once ('../dao/vehiculeDao/vehicule.dao.php');
require_once ('./validateur/Valide_add_Vehicule.class.php');
require_once './Controllers/Controller_vehicule.php';

$bdd = new Vehicule_RolesDAO();

$validator = new Valide_add_vehicule();
$val = $validator->verif_vehicule($_POST['add'], $bdd);



	 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Message</title>
</head>
<body>

	<div class='noobg'>
	
	 <?php 
	

	 if ($val == "erreur") {
	 	?>
	 	<img class='img' src='../Public/img/error.gif'><br>
	 	<?php 
	 	 echo (" Cet Voiture est déja utilisé! Veuillez inserer un autre! ");
	 	 ?>

	 	 <a href=javascript:history.go(-1)>Retour</a>
	 	 <?php 
	 }
	
	 else if($val == "success"){
	 	?>
	 	<img class='img' src='../Public/img/success.gif'><br>
	 	<?php 
	 	 echo ("Ajouté avec success!");
	 	 ?>
	 	
	 	 <meta http-equiv='refresh' content='4;URL=http://localhost:8080/projet%20php/view/vehicule_view/vehicule_view.php? '>
	 	  <?php 
	 }
	
	  ?>
	   </div>
</body>
</html>

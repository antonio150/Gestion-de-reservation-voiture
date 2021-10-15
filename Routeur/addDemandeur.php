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
require_once ('../dao/DemandeurDao/Demandeur.dao.php');
require_once ('./validateur/Valide_add_Demande.class.php');
require_once './Controllers/Controller_demandeur.php';

$bdd = new Demandeur_RolesDAO();

$validator = new Valide_add_Demandeur();

$val = $validator->verif($_POST['add'], $bdd);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Message</title>
</head>
<body>

	<div class='noobg'>
	
	 <?php 
	

	 if ($val == "alert") {
	 	?>
	 	<img class='img' src='../Public/img/error.gif'><br>
	 	<?php 
	 	 echo ("Cet Surnom est déja utilisé! Veuillez inserer un autre! Vous pouvez aussi ajouter des chiffres suivant les lettres");
	 	 ?><br>

	 	 <a href=javascript:history.go(-1)>Retour</a>
	 	 <?php 
	 }
	 else if($val == "succesAdmin"){
	 	?>
	 	<img class='img' src='../Public/img/success.gif'><br>
	 	<?php 
	 	 echo ("Ajouter avec success, 
					Nous allons vous rédiriger dans la page précedent !");
					?>
	 	 <meta http-equiv='refresh' content='3;URL=http://localhost:8080/projet%20php/view/demandeur_view/demandeur_view.php? '>
	 	  <?php 
	 }
	 else if($val == "succes"){
	 	?>
	 	<img class='img' src='../Public/img/success.gif'><br>
	 	<?php 
	 	 echo ("Ajouter avec success! Nous allons vous rédiriger dans la page authentification !");
	 	 ?>
	 	
	 	 <meta http-equiv='refresh' content='3;URL=http://localhost:8080/projet%20php/'>
	 	  <?php 
	 }
	 
	  ?>

	

</body>
</html>

	
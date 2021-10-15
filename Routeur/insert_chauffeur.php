

<?php 
ini_set("display_errors", "off");

require_once '../modele/Gere.classe.php';
require_once '../dao/chauffeurDao/Roles.dao.php';
require_once './validateur/Valide_insert_chauffeur.class.php';
require_once './Controllers/Controller_chauffeur.php';

$id = $_GET['i'];
$admin=$_GET['name'];
$job=$_GET['job'];



$ctrl = new Controller_chauffeur();
$validateur = new Valide_insert_chauffeur();
$val = $validateur->verif($_POST['add'], $ctrl,$admin);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Message</title>
</head>
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

<body>

	<div class='noobg'>
	
	 <?php 
	

	 if ($val == "erreur") {
	 	?>
	 	<img class='img' src='../Public/img/error.gif'><br>
	 	<?php 
	 	 echo (" Cet Surnom est déja utilisé! Veuillez inserer un autre! Vous pouvez aussi ajouter des chiffre suivant les lettre ");
	 	 ?>

	 	 <a href=javascript:history.go(-1)>Retour</a>
	 	 <?php 
	 }
	
	 else if($val == "success1"){
	 	?>
	 	<img class='img' src='../Public/img/success.gif'><br>
	 	<?php 
	 	 echo (" Ajouter avec success! Nous allons vous rédiriger dans la page d'authentification ! ");
	 	 ?>
	 	
	 	 <meta http-equiv='refresh' content='5;URL=http://localhost:8080/projet%20php/view/Authentification_view/authentifChauff.php'>
	 	  <?php 
	 }
	 else if($val == "success2"){
	 	?>
	 	<img class='img' src='../Public/img/success.gif'><br>
	 	<?php 
	 	 echo (" Ajouter avec success! Nous allons vous rédiriger dans la page précedent ! ");
	 	 ?>
	 	
	 	 <meta http-equiv='refresh' content='5;URL=http://localhost:8080/projet%20php/view/chauffeur_view/chauffeur_view.php '>
	 	  <?php 
	 }
	
	  ?>
	   </div>
</body>
</html>

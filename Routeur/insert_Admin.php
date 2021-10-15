<style type="text/css">
	.noobg{
		margin-top:200px;margin-bottom:10px;margin-left:300px;margin-right:300px;
		font-size: 30px;
		color: black;
		background-color: white; padding: 20px;border-radius: 5px;text-align: center;
		display:inline-block;

	}
	.img{
		width: 100px;
	}
</style>
<?php 
ini_set("display_errors", "off");
include '../dao/adminDao/admin.dao.php';
include './validateur/Valide_insert_Admin.class.php';

$bdd = new admin_RolesDAO();
$validateur_insert_Admin = new Valide_insert_Admin();
$val = $validateur_insert_Admin->verif($_POST['add'], $bdd);

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
	 	 echo (" Ancien mot de passe incorrect ");
	 	 ?>

	 	 <a href=javascript:history.go(-1)>Retour</a>
	 	 <?php 
	 }
	
	 else if($val == "success"){
	 	?>
	 	<img class='img' src='../Public/img/success.gif'><br>
	 	<?php 
	 	 echo ("Modification réussi Nous allons vous rédiriger dans la page d'authentification !");
	 	 ?>
	 	
	 	 <meta http-equiv='refresh' content='5;URL=http://localhost:8080/projet%20php/view/Authentification_view/authenifAdmin.php? '>
	 	  <?php 
	 }
	
	  ?>
	   </div>
</body>
</html>

		

<?php 
ini_set("display_errors", "off");
	session_start();

if ($_SESSION['name']) {
	$name = $_SESSION['name'];
	$job = $_SESSION['job'];
	$id = $_SESSION['numero'];
	if ($job=='demandeur') {
		header("location: http://localhost:8080/projet php/view/reservation_view/reservation_view.php");
	}else if($job=='chauffeur'){
		header("location: http://localhost:8080/projet php/view/reservation_view/validereserve_view.php");
	}
	else if($job==null){
		header("location: http://localhost:8080/projet php/view/reservation_view/reserAdmin_view.php");
	}
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>

<link rel="stylesheet" type="text/css" href="../../Public/css/authentification/authentif_admin.css">

<body>
	<div class="tout">
		<form action="../../Routeur/authentif_admin_routeur.php" class="form3" method="POST">

		<fieldset class="fieldset_admin" style="">
			<legend class="legend_admin" style="">Pour Administrateur :</legend>

		<div>
			<input class="surnom" type="text" name="snom" placeholder="Saisir votre Surnom" style="" required>
		</div>
		<div>
			
		</div>
		<div>
			<input type="password" name="mdp3" placeholder="Entré le mot de passe" class="surnom" style="" required>
		</div>
		<div> 
			<input type="submit" name="execute3" value="Executé" class="input_submit" style="">
			
		</div>
		<div class="ligne" style="">
			_______________________________________
		</div>

		<div class="div_link_admin_php" style=" ">
		<a href="http://localhost:8080/projet%20php/admin.php" class="link_admin" style="">Changer le mot de passe Administrateur</a>
		</div>

		</fieldset>
	</form>


	</div>

	<div class="notice">
		<h class="verif1">Vous n'êtes pas Administrateur ?</h>
		<br><br><br>
		<div class="verif2">
			<a class="" href="http://localhost:8080/projet%20php/">Vous êtes demandeur ?</a><br><br>
			<a href="authentifChauff.php">Vous êtes chauffeur ?</a>
		</div>
		
	</div>

</body>
</html>
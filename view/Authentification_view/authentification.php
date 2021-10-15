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
	<title>Authentification</title>
</head>
<link rel="stylesheet" type="text/css" href="../../Public/css/authentification/authentification_demandeur.css">

<body>
  <div class="tout"> 
	<form action="../../projet php/Routeur/authentif_demandeur_routeur.php" class="form1" method="POST" >

		<fieldset class="fieldset_demandeur" style="">
			<legend class="legend_demandeur" style="">Pour demandeur :</legend>

		<div>
			<input class="surnom" type="text" name="nom" placeholder="Saisir votre surnom" style="" required>
		</div>
	
		<div> 
			<input type="password" name="mdp2" placeholder="Entré votre mot de passe" class="surnom" style="" required>
		</div>
		
		<div> 
			<input type="submit" name="execute1" value="Executé" class="submit" style="">
			
		</div>

		<div class="ligne" style="">
			_______________________________________
		</div>

		<div class="div_link_demandeAdd" style=" ">
		<a class="link_demandeAdd" href="http://localhost:8080/projet%20php/view/demandeur_view/demandeAdd_view.php" style="">Créer un compte</a>
		</div>

		</fieldset>
	</form>
	
	
	</div>

	<div class="notice">
		<h class="verif1">Vous n'êtes pas demandeur ?</h>
		<br><br><br>
		<div class="verif2">
			<a class="" href="http://localhost:8080/projet%20php/view/Authentification_view/authentifChauff.php">Vous êtes chauffeur ?</a><br><br>
			<a href="http://localhost:8080/projet%20php/view/Authentification_view/authenifAdmin.php">Vous êtes administrateur ?</a>
		</div>
		
	</div>

</body>
</html>
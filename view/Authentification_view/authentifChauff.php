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
	<title>Authentif de Chauffeur</title>
</head>
<link rel="stylesheet" type="text/css" href="../../Public/css/authentification/authentif_chauffeur.css">

<body>
	<div class="tout">
		<form action="../../Routeur/authentif_chauffeur_routeur.php" class="form2" method="POST">

		<fieldset class="fieldset_chauffeur" style="">
			<legend class="legend_chauffeur" style="">Pour chauffeur :</legend>
		<div>
			<input class="surnom" type="text" name="nom" placeholder="Saisir votre surnom" style="" required>
		</div>
		
		<div>
			<input type="password" name="mdp2" placeholder="Entré votre mot de passe" class="surnom" style="" required>
		</div>

		
		<div> 
			<input type="submit" name="execute2" value="Executé" class="input_submit" style="">
			
		</div>

		<div class="ligne" style="">
			_______________________________________
		</div>

		<div class="div_link_chauffAdd" style=" ">
		<a href="http://localhost:8080/projet%20php/view/chauffeur_view/chauffAdd_view.php" class="link_chauffAdd" style="">Créer un compte</a>
	</div>

		</fieldset>
	</form>
		
	</div>

	<div class="notice">
		<h class="verif1">Vous n'êtes pas chauffeur ?</h>
		<br><br><br>
		<div class="verif2">
			<a class="" href="http://localhost:8080/projet%20php/">Vous êtes demandeur ?</a><br><br>
			<a href="authenifAdmin.php">Vous êtes administrateur ?</a>
		</div>
		
	</div>
		

</body>
</html>
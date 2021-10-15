
<!DOCTYPE html>
<html>
<head>
	<title>Demandeur</title>
</head>
<link rel="stylesheet" type="text/css" href="../../Public/css/demandeur/demandeur_add.css">

<body >
	<script type='text/javascript' src='../../Public/script/verif.js'></script>
	<style type="text/css">
	
	</style>


	<div class="champ" >
		<div class="caption">Creation de compte</div>
	<form action="../../Routeur/addDemandeur.php" method="post" class="form_demandeur" style=" ">
		
			<div class="nom">
				
				<input type="text" name="nom" class="nom_demandeur" onkeyup="verif_Char(this)" placeholder="Saisir nom" required>
			</div>

			<div class="prenom">
				
				<input type="text" name="pnom" class="prenom_demandeur" style="" onkeyup="verif_Maj(this)" placeholder="Saisir Prenom" style="" required>
			</div>

			<div class="prenom">
				
				<input type="text" name="snom" class="surnom_demandeur" style="" onkeyup="verif_Space(this)" placeholder="Saisir surnom" style="" required>
			</div>

			<div class="mdp">
				
				<input type="password" name="motpass" class="motpass_chauffeur" style="" placeholder="Saisir mot de passe" required>
			</div>

			<div >
				<input type="submit" value="Ajouter" class="submit1" name="add" style="">
				<a class="submit2" href="javascript:history.go(-1)">ANNULER</a>
			</div>
		
		
	</form>

	
		
	</div>
	
</body>

</html>
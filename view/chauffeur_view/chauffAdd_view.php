
<!DOCTYPE html>
<html>
<head>
	<title>Chauffeur</title>
</head>
<link rel="stylesheet" type="text/css" href="../../Public/css/chauffeur/chauffeur_add.css">
<style type="text/css">
	.submit1{
			font-size: 15px;margin:16px;padding: 10px;border-radius: 6px;border-width: 1; background-color: rgb(105,184,103);width: 170px; border:none; color: white;text-decoration: none;
		}
	.submit2{
			font-size: 15px;margin:16px;padding: 10px;border-radius: 6px;border-width: 1; background-color: rgb(251,36,68);width: 170px; border:none; color: white;text-decoration: none;
		}
	.caption{
		background-color: rgb(60,74,251);width: 360px;font-size: 20px;text-align: center;padding-top: 10px;padding-bottom: 10px;color: white;
	}

</style>
<script type='text/javascript' src='../../Public/script/verif.js'></script>

<body >
	<div  class="champ">
		<div class="caption">Creation de compte</div>
	<form action="../../Routeur/insert_chauffeur.php" class="form_chauffeur_add" method="post" style=" ">
		
			<div >
				<input type="text" name="nomChauf" placeholder="Saisir nom" style="" onkeyup="verif_Char(this)" class="nom_chauffeur" required>
			</div>
			<div >
				<input type="text" name="prenomChauf" placeholder="Saisir prenom" onkeyup="verif_Maj(this)" class="prenom_chauffeur" style="" required>
			</div>

			<div >
				<input type="text" name="snomChauf" class="surnom_chauffeur" onkeyup="verif_Space(this)" placeholder="Saisir surnom" style="" required>
			</div>

			<div >
				<input type="password" name="motpass" class="motpass_chauffeur" placeholder="Saisir le mot de passe" style="" required>
			</div>

			<div >
				<input type="submit" value="AJOUTER" name="add" class="submit1" style="">
				<a class="submit2" href="javascript:history.go(-1)">ANNULER</a>
			</div>
		
		
	</form>


		
	</div>


	
</body>

</html>
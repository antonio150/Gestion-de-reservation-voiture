
<!DOCTYPE html>
<html>
<head>
	<title>Administrateur</title>
</head>
<link rel="stylesheet" type="text/css" href="./Public/css/admin/admin.css">
<style type="text/css">
	
</style>

<body >
	<div  class="champ">
		<div class="caption">Modification de compte</div>
	<form action="Routeur/insert_Admin.php" method="post" style=" border-radius: 9px;border: solid;border-color:rgb(0,128,255); background-color: white;">
		
			<div >
				<input type="text" name="snom" placeholder="Saisir nouveau surnom" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px;" required>
			</div>
			<div >
				<input type="password" name="motpass1" placeholder="Saisir l'ancien mot de passe" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px; margin-bottom: 30px;" required>
			</div>
			<div >
				<input type="password" name="motpass2" placeholder="Saisir le nouveau mot de passe" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px;" required>
			</div>

			<div >
				<input type="submit" value="Modifier" name="add" class="submit1">
				<a class="submit2" href="javascript:history.go(-1)">ANNULER</a>
			</div>
		
	</form>

	
	</div>

</body>

</html>
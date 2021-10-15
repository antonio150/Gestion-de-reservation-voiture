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

require_once ('../dao/DemandeurDao/Demandeur.dao.php');
require_once './validateur/Valide_authentif_demandeur.class.php';
require_once './Controllers/Controller_demandeur.php';
/**
 * 
 */

$ctrl = new Controller_demandeur();
$validateur_authentif_demandeur = new Valide_authentif_demandeur();
$val = $validateur_authentif_demandeur->verif($_POST['execute1'],$ctrl);

	?>

<!DOCTYPE html>
<html>
<head>
	<title>Message</title>
</head>
<body>

	<div class='noobg'>
	
	 	<img class='img' src='../Public/img/error.gif'><br>
	 	<?php 
	 	 echo ($val);
	 	 ?>

	 	 <a href=javascript:history.go(-1)>Retour</a>
	 	
	   </div>
</body>
</html>

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
ini_set("display_errors", "off");
require_once ('./Controllers/Controller_chauffeur.php');
require_once './validateur/Valide_chauffeur.class.php';


$ctrl = new Controller_chauffeur();
$validator_authentif_chauffeur = new Valide_chauffeur();
$val = $validator_authentif_chauffeur->verif($_POST['execute2'],$ctrl);	
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

	 	 <a href=javascript:history.go(-1)>Retour</a>;
	 	
	   </div>
</body>
</html>

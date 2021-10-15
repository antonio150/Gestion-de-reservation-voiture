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
include '../dao/adminDao/admin.dao.php';
include './validateur/Valide_authentif_admin.class.php';

/**
 * 
 */

$bdd = new admin_RolesDAO();
$validator_authentif_admin = new Valide_authentif_admin();

$val = $validator_authentif_admin->verif($_POST['execute3'],$bdd);

	
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

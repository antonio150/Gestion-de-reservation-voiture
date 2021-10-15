<?php 
require_once('../../session-verif.php');
require_once('../../session2-verif.php');
ini_set("display_errors", "off");




 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Chauffeur</title>
</head>


<body >
	

<?php 
	if ($admin=="admin") {
		?>
		<link rel="stylesheet" type="text/css" href="../../Public/css/chauffeur/chauffeur_editPlus.css">

		<?php 
		include_once 'chauffEditPlus_view.php';
 

	}
	elseif($admin=="noadmin"){
		include_once 'chauffEditSolo_view.php';
	}

	?>

	
	
</body>

</html>
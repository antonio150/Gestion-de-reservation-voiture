<?php 

require_once('../../session-verif.php');
require_once('../../session2-verif.php');

//ini_set('display_errors','off');

$admin = str_replace(' ', '', $admin);
$job=$_GET['job'];

$con=mysqli_connect("localhost","root","","park");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Demandeur</title>
</head>

<link rel="stylesheet" type="text/css" href="../../Public/css/reservation/styleReser.css" />



<body >
	
<?php 


	if ($admin=="admin") {

			include_once 'demandeEditPlus_view.php'; 
		}
	elseif($admin=="noadmin"){
			include_once 'demandeEditSolo_view.php';
	}
	 ?>

	
</body>

</html>
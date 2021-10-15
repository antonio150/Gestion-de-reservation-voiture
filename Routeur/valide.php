
<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
</head>
<body>
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
<div class="noobg">
<?php 
ini_set("display_errors", "off");

include './Controllers/Controller_reservation.php';
include './Controllers/Controller_chauffeur.php';
include './Controllers/Controller_demandeur.php';
include './validateur/Valide_marquer_Chauff.class.php';

$id=$_GET['i'];
					$id=str_replace(' ','',$id);	

					$admin=$_GET['name'];
					$job=$_GET['job'];

					$val=$_GET['val'];

					$numc=$_GET['numc'];
					$numc=str_replace(' ','',$numc);


					
					$date1=$_GET['date1'];
					$date2=$_GET['date2'];
				
					

$ver=$_GET['ver'];

$valide = new Valide_marquer_Chauff();
$valide = $valide->valider($id,$admin,$job,$val,$numc,$date1,$date2,$ver);	

?> 
			
<?php 
if ($valide=='success') {
	?>
	<img class='img' src='../Public/img/success.gif'><br>
	<?php
	echo "La reservation a été marqué par vous";

	if($ver=="valide"){	
?>
		
				<meta http-equiv='refresh' content='5;URL=http://localhost:8080/projet%20php/view/reservation_view/validereserve_view.php?i=<?php echo($numc) ?> & name=<?php echo($admin) ?> & job=<?php echo($job) ?>'>
			
			<?php 

}else if($ver=="modif"){
?>
				<meta http-equiv='refresh' content='5;URL=http://localhost:8080/projet%20php/view/reservation_view/tableModif_view.php?i=<?php echo($numc) ?> & name=<?php echo($admin) ?> & job=<?php echo($job) ?> & val=<?php echo($val) ?> & date1=<?php echo($date1) ?> & date2=<?php echo($date2) ?>'>
			<?php 
	}

}
 
else if($valide=='erreur'){
	?>
	<img class='img' src='../Public/img/error.gif'><br>
	<?php 
	echo "Déjoler ! Vous n'êtes pas le chauffeur choisit par cet demandeur";

	if($ver=="valide"){	
?>
		
				<meta http-equiv='refresh' content='5;URL=http://localhost:8080/projet%20php/view/reservation_view/validereserve_view.php?i=<?php echo($numc) ?> & name=<?php echo($admin) ?> & job=<?php echo($job) ?>'>
			
			<?php 

}else if($ver=="modif"){
?>
				<meta http-equiv='refresh' content='5;URL=http://localhost:8080/projet%20php/view/reservation_view/tableModif_view.php?i=<?php echo($numc) ?> & name=<?php echo($admin) ?> & job=<?php echo($job) ?> & val=<?php echo($val) ?> & date1=<?php echo($date1) ?> & date2=<?php echo($date2) ?>'>
			<?php 
	}


}


 ?>
</div>


 </body>
</html>

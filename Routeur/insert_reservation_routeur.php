
<!DOCTYPE html>
<html>
<head>
	<title>Message</title>
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
		width: 100px;
	}
	.img2{
		width: 300px;
	}
</style>


<div class="noobg">

<?php 


ini_set('display_errors','off');

include '../dao/dateTableDao/dateTable.dao.php';
 include '../dao/dureeDao/duree.dao.php';
//require '../../modele/gereDuree.class.php';
include '../dao/DemandeurDao/Demandeur.dao.php';

include '../dao/vehiculeDao/vehicule.dao.php';
include '../dao/lieuDao/lieu.dao.php';

require_once './Controllers/Controller_reservation.php';


include '../Routeur/reservation_routeur/demandeur_reservation_routeur.php';
include '../Routeur/reservation_routeur/date_reservation.php';


include './validateur/Valide_insert_reservation.class.php';

$val=$_GET['val'];

$ver=$_GET['ver'];

$date1=$_GET['date1'];
$date2=$_GET['date2'];

$ctrl = new Controller_reservation();


$validateur = new Valide_reservation();


$notif2 = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '2');
$notif1 = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '1');

if($notif1 != null ){
	echo ("Remplir le champ lieu est obligatoire");
	?>
	 <a href=javascript:history.go(-1)>Retour</a>
	 <?php 
}

elseif ($notif2 == null && $notif1 == null) {
	$notif3 = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '3');
	
	if ($ver == 'reser') {
		
		?>

	<img class='img2' src='../Public/img/success.gif'><br>
	<?php echo " La reservation a été ajouté avec succes"; ?>
	<meta http-equiv='refresh' content='5;URL=http://localhost:8080/projet%20php/'>

	<?php 
}else if ($ver == 'reserAdm') {
	?>

	<img class='img2' src='../Public/img/success.gif'><br>
	<?php echo " La reservation a été ajouté avec succes"; ?>
	<meta http-equiv='refresh' content='5;URL=http://localhost:8080/projet%20php/view/reservation_view/reserAdmin_view.php'>

	<?php 
}else if ($ver == 'tableModif'){
	?>

	<img class='img2' src='../Public/img/success.gif'><br>
	<?php echo " La reservation a été ajouté avec succes"; ?>
	<meta http-equiv='refresh' content='5;http://localhost:8080/projet%20php/view/reservation_view/tableModif_view.php?val=<?php echo($val) ?>&date1=<?php echo($date1) ?>&date2=<?php echo($date2) ?>'>

	<?php 
}
}

else{

$ver = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '4');

$id = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '5');

$val = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '6');

$numdem1 = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '7');

$idduree1 = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '8');

$idduree2 = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '9');

$idlieu1 = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '10');

$mission = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '11');

$remarq = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '12');

$j = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '13');

$z = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '14');

$v = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '15');

$vehicl = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '16');

$voit = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '17');

$admin = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '18');

$tab = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '19');

$job = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '20');



$val1 = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '23');

$idlieu2 = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '24');

$idlie = $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '25');

$chauffeur= $validateur->verif_reservation($_POST['add'],$val,$ver,$id,$admin,$job,$ctrl , '26');

	
 if($idlieu1!= null && $idlieu2!="null"){
				
		
		if($ver=='reser'){
			 
			?>
		<img class='img' src='../Public/img/warning.gif'><br>
		<?php echo "$notif2"; ?>
		<a href=" ./validateur/confirm.php?i=<?php echo ($id) ?>&chauffeur=<?php echo($chauffeur) ?>& val=<?php echo($val) ?> & numdem1=<?php echo($numdem1) ?> & duree1=<?php echo($idduree1) ?> & duree2=<?php echo($idduree2) ?> & lieu=<?php echo($idlie) ?> & mission=<?php echo($mission) ?> & remar=<?php echo($remarq) ?> & j=<?php echo($j) ?> & z=<?php echo($z) ?> & v1=<?php echo($v) ?> & vehic=<?php echo($vehicl) ?> & voit=<?php echo($voit) ?> & name=<?php echo($admin) ?> & tab=<?php echo('reserv') ?> & job=<?php echo($job) ?> & date1=<?php echo($date1) ?> & date2=<?php echo($date2) ?>  "> OUI </a>
		<a href='http://localhost:8080/projet%20php/view/reservation_view/reservation_view.php?i=<?php echo($id) ?> & name=<?php echo($admin) ?> & job=<?php echo($job) ?> & date1=<?php echo($date1) ?> & date2=<?php echo($date2) ?> & val=<?php echo($val) ?>' > NON </a>
		
	<?php 	;}
						
		elseif($ver=='reserAdm'){
			
			?>
			<img class='img' src='../Public/img/warning.gif'><br>
			<?php echo "$notif2"; ?>
			<a href=" ./validateur/confirm.php?i=<?php echo($id) ?>&chauffeur=<?php echo($chauffeur) ?> & val=<?php echo($val) ?> & numdem1=<?php echo($numdem1) ?> & duree1=<?php echo($idduree1) ?> & duree2=<?php echo($idduree2) ?> & lieu=<?php echo($idlie) ?> & mission=<?php echo($mission) ?> & remar=<?php echo($remarq) ?> & j=<?php echo($j) ?> & z=<?php echo($z) ?> & v1=<?php echo($v) ?> & vehic=<?php echo($vehicl) ?> & voit=<?php echo($voit) ?> & name=<?php echo($admin) ?> & tab=<?php echo('reserAdm') ?> & job=<?php echo($job) ?> & date1=<?php echo($date1) ?> & date2=<?php echo($date2) ?>"  > OUI </a>
						<a href='http://localhost:8080/projet%20php/view/reservation_view/reserAdmin_view.php?i=<?php echo($id) ?> & name=<?php echo($admin) ?> & job=<?php echo($job) ?> & date1=<?php echo($date1) ?> & date2=<?php echo($date2) ?> & val=<?php echo($val) ?> ' > NON </a>
	<?php ;
		}

		elseif($ver=='tableModif'){
			
			?> 
			<img class='img' src='../Public/img/warning.gif'><br>
			<?php echo "$notif2"; ?>
			<a href=" ./validateur/confirm.php?i=<?php echo($id) ?>&chauffeur=<?php echo($chauffeur) ?> & val=<?php echo($val) ?> & numdem1=<?php echo($numdem1) ?> & duree1=<?php echo($idduree1) ?> & duree2=<?php echo($idduree2) ?> & lieu=<?php echo($idlie) ?> & mission=<?php echo($mission) ?> & remar=<?php echo($remarq) ?> & j=<?php echo($j) ?> & z=<?php echo($z) ?> & v1=<?php echo($v) ?> & vehic=<?php echo($vehicl) ?> & voit=<?php echo($voit) ?> & name=<?php echo($admin) ?> & tab=<?php echo('tableModif') ?> & date1=<?php echo($date1) ?> & date2=<?php echo($date2) ?> & job=<?php echo($job) ?>"  > OUI </a>
						<a href='http://localhost:8080/projet%20php/view/reservation_view/tableModif_view.php?i=<?php echo($id) ?> & name=<?php echo($admin) ?> & job=<?php echo($job) ?> & val=<?php echo($val) ?> & date1=<?php echo($date1) ?> & date2=<?php echo($date2) ?>' > NON </a>
		<?php ;
		}
		
	
}

else if($idlieu1!= null && $idlieu2=="null"){

				
	
	if($ver=='reser'){
			
			?> 
		<img class='img' src='../Public/img/warning.gif'><br>
		<?php echo "$notif2"; ?>
		<a href=" ./validateur/confirm.php?i=<?php echo($id) ?>&chauffeur=<?php echo($chauffeur) ?> & val=<?php echo($val) ?> & numdem1=<?php echo($numdem1) ?> & duree1=<?php echo($idduree1) ?> & duree2=<?php echo($idduree2) ?> & lieu=<?php echo($idlie) ?> & mission=<?php echo($mission) ?> & remar=<?php echo($remarq) ?> & j=<?php echo($j) ?> & z=<?php echo($z) ?> & v1=<?php echo($v) ?> & vehic=<?php echo($vehicl) ?> & voit=<?php echo($voit) ?> & name=<?php echo($admin) ?> & tab=<?php echo('reserv') ?> & job=<?php echo($job) ?> & date1=<?php echo($date1) ?> & date2=<?php echo($date2) ?>"  > OUI </a>
		<a href='http://localhost:8080/projet%20php/view/reservation_view/reservation_view.php?i=<?php echo($id) ?> & name=<?php echo($admin) ?> & job=<?php echo($job) ?>' > NON </a>
		<?php ;}
						
		elseif($ver=='reserAdm'){
			
			?> 
			<img class='img' src='../Public/img/warning.gif'><br>
			<?php echo "$notif2"; ?>
			<a href=" ./validateur/confirm.php?i=<?php echo($id) ?>&chauffeur=<?php echo($chauffeur) ?> & val=<?php echo($val) ?> & numdem1=<?php echo($numdem1) ?> & duree1=<?php echo($idduree1) ?> & duree2=<?php echo($idduree2) ?> & lieu=<?php echo($idlie) ?> & mission=<?php echo($mission) ?> & remar=<?php echo($remarq) ?> & j=<?php echo($j) ?> & z=<?php echo($z) ?> & v1=<?php echo($v) ?> & vehic=<?php echo($vehicl) ?> & voit=<?php echo($voit) ?> & name=<?php echo($admin) ?> & tab=<?php echo('reserAdm') ?> & job=<?php echo($job) ?> & date1=<?php echo($date1) ?> & date2=<?php echo($date2) ?>"  > OUI </a>
						<a href='http://localhost:8080/projet%20php/view/reservation_view/reserAdmin_view.php?i=<?php echo($id) ?> & name=<?php echo($admin) ?> & job=<?php echo($job) ?>' > NON </a>
		<?php ;
		}
		elseif($ver=='tableModif'){
			
			?> 
			<img class='img' src='../Public/img/warning.gif'><br>
			<?php echo "$notif2"; ?>
			<a href=" ./validateur/confirm.php?i=<?php echo($id) ?>&chauffeur=<?php echo($chauffeur) ?> & val=<?php echo($val) ?> & numdem1=<?php echo($numdem1) ?> & duree1=<?php echo($idduree1) ?> & duree2=<?php echo($idduree2) ?> & lieu=<?php echo($idlie) ?> & mission=<?php echo($mission) ?> & remar=<?php echo($remarq) ?> & j=<?php echo($j) ?> & z=<?php echo($z) ?> & v1=<?php echo($v) ?> & vehic=<?php echo($vehicl) ?> & voit=<?php echo($voit) ?> & name=<?php echo($admin) ?> & tab=<?php echo('tableModif') ?> & date1=<?php echo($date1) ?> & date2=<?php echo($date2) ?> & job=<?php echo($job) ?>"  > OUI </a>
						<a href='http://localhost:8080/projet%20php/view/reservation_view/tableModif_view.php?i=<?php echo($id) ?> & name=<?php echo($admin) ?> & job=<?php echo($job) ?> & val=<?php echo($val) ?> & date1=<?php echo($date1) ?> & date2=<?php echo($date2) ?>' > NON </a>
		<?php ;
		}
		
	
}



else if($idlieu1== null && $idlieu2!="null"){
				
			

		if($ver=='reser'){
			
			?>
		<img class='img' src='../Public/img/warning.gif'><br>
		<?php echo "$notif2"; ?>
		<a href=" ./validateur/confirm.php?i=<?php echo($id) ?>&chauffeur=<?php echo($chauffeur) ?> & val=<?php echo($val) ?> & numdem1=<?php echo($numdem1) ?> & duree1=<?php echo($idduree1) ?> & duree2=<?php echo($idduree2) ?> & lieu=<?php echo($idlieu2) ?> & mission=<?php echo($mission) ?> & remar=<?php echo($remarq) ?> & j=<?php echo($j) ?> & z=<?php echo($z) ?> & v1=<?php echo($v) ?> & vehic=<?php echo($vehicl) ?> & voit=<?php echo($voit) ?> & name=<?php echo($admin) ?> & tab=<?php echo('reserv') ?> & job=<?php echo($job) ?> & date1=<?php echo($date1) ?> & date2=<?php echo($date2) ?>"  > OUI </a>
		<a href='http://localhost:8080/projet%20php/view/reservation_view/reservation_view.php?i=<?php echo($id) ?> & name=<?php echo($admin) ?> & job=<?php echo($job) ?>' > NON </a>
		<?php ;}

		elseif($ver=='reserAdm'){
			
			?>
			<img class='img' src='../Public/img/warning.gif'><br>
			<?php echo "$notif2"; ?>
			<a href=" ./validateur/confirm.php?i=<?php echo($id) ?>&chauffeur=<?php echo($chauffeur) ?> & val=<?php echo($val) ?> & numdem1=<?php echo($numdem1) ?> & duree1=<?php echo($idduree1) ?> & duree2=<?php echo($idduree2) ?> & lieu=<?php echo($idlieu2) ?> & mission=<?php echo($mission) ?> & remar=<?php echo($remarq) ?> & j=<?php echo($j) ?> & z=<?php echo($z) ?> & v1=<?php echo($v) ?> & vehic=<?php echo($vehicl) ?> & voit=<?php echo($voit) ?> & name=<?php echo($admin) ?> & tab=<?php echo('reserAdm') ?> & job=<?php echo($job) ?> & date1=<?php echo($date1) ?> & date2=<?php echo($date2) ?>" > OUI </a>
						<a href='http://localhost:8080/projet%20php/view/reservation_view/reserAdmin_view.php?i=<?php echo($id) ?> & name=<?php echo($admin) ?> & job=<?php echo($job) ?>' > NON </a>
		<?php ;
		}
		elseif($ver=='tableModif'){
			
			?> 
			<img class='img' src='../Public/img/warning.gif'><br>
			<?php echo "$notif2"; ?>
			<a href=" ./validateur/confirm.php?i=<?php echo($id) ?>&chauffeur=<?php echo($chauffeur) ?> & val=<?php echo($val) ?> & numdem1=<?php echo($numdem1) ?> & duree1=<?php echo($idduree1) ?> & duree2=<?php echo($idduree2) ?> & lieu=<?php echo($idlieu2) ?> & mission=<?php echo($mission) ?> & remar=<?php echo($remarq) ?> & j=<?php echo($j) ?> & z=<?php echo($z) ?> & v1=<?php echo($v) ?> & vehic=<?php echo($vehicl) ?> & voit=<?php echo($voit) ?> & name=<?php echo($admin) ?> & tab=<?php echo('tableModif') ?> & date1=<?php echo($date1) ?> & date2=<?php echo($date2) ?> & job=<?php echo($job) ?>"  > OUI </a>
						<a href='http://localhost:8080/projet%20php/view/reservation_view/tableModif_view.php?i=<?php echo($id) ?> & name=<?php echo($admin) ?> & job=<?php echo($job) ?> & val=<?php echo($val) ?> & date1=<?php echo($date1) ?> & date2=<?php echo($date2) ?>' > NON </a>
		<?php ;
		}
		
		
		
		}
	}

		 ?>
		</div>


	</body>

</html>
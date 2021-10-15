<?php 
ini_set("display_errors", "off");

$ver=$_GET['ver'];
$numd=$_GET['j'];
$id=$_GET['numid'];
$k=$_GET['k'];
$val = $_GET['val'];
$admin=$_GET['name'];
$job=$_GET['job'];
$duree=$_GET['dure'];

$date1=$_GET['date1'];
$date2=$_GET['date2'];

$k=str_replace(' ','',$k);
$admin=str_replace(' ','',$admin);	


include './Controllers/Controller_reservation.php';

$con;

$ctrl = new Controller_reservation();

if ($ver=="reser") {
						
					if($k==$numd){	

					$ctrl->efface_Reservation($val,$id,$numd);

					$ctrl->efface_data_Lundi($val,$id);

					$ctrl->efface_data_Mardi($val,$id);

					$ctrl->efface_data_Mercredi($val,$id);

					$ctrl->efface_data_Jeudi($val,$id);

					$ctrl->efface_data_Vendredi($val,$id);

					$ctrl->efface_data_Samedi($val,$id);

					$ctrl->efface_data_Dimanche($val,$id);

					$ctrl->supprimer_Duree($duree);

				

					header("location:../view/reservation_view/reservation_view.php?i=$numd & name=$admin & job=$job");
					}

						else {
					 ?>
					 <!DOCTYPE html>
					 <html>
					 <head>
					 	<title>Accés interdit</title>
					 </head>
					 <style type="text/css">
	
					.noobg{
		margin-top:00px;margin-bottom:10px;margin-left:400px;margin-right:300px;
		font-size: 20px;
		color: black;
		background-color: white; padding: 20px;border-radius: 10px;text-align: center;
		display:inline-block; border: solid;position: absolute;

	}
					
					.img{
						width: 50px;
					}
				</style>
					 <body>
					 	<div class="noobg">
					 		<img class='img' src='../Public/img/warning.gif'><br>
						 	<div>Déjoler! Vous n'avez la permission de supprimer les reservations des autres utilisateurs</div>
						 	<a href=javascript:history.go(-1)>Retour</a>
					 	</div>
					 </body>
					 </html>
					<?php
							}

	}

elseif ($ver=="reserModif" && $admin=="noadmin") {

	

							
					// $re=mysqli_query($con,"select * from tablenow");
							$val=$_GET['val'];		
					if($k==$numd){	


					$ctrl->efface_Reservation($val,$id,$numd);

					$ctrl->efface_data_Lundi($val,$id);

					$ctrl->efface_data_Mardi($val,$id);

					$ctrl->efface_data_Mercredi($val,$id);

					$ctrl->efface_data_Jeudi($val,$id);

					$ctrl->efface_data_Vendredi($val,$id);

					$ctrl->efface_data_Samedi($val,$id);

					$ctrl->efface_data_Dimanche($val,$id);

					$ctrl->supprimer_Duree($duree);

					header("location:../view/reservation_view/tableModif_view.php?i=$numd & name=$admin & val=$val & job=$job & date1=$date1 & date2=$date2");
					}

						else {
					 ?>
					 <!DOCTYPE html>
					 <html>
					 <head>
					 	<title>Accés interdit</title>
					 </head>
					 <style type="text/css">
	
					.noobg{
		margin-top:00px;margin-bottom:10px;margin-left:400px;margin-right:300px;
		font-size: 20px;
		color: black;
		background-color: white; padding: 20px;border-radius: 10px;text-align: center;
		display:inline-block; border: solid;position: absolute;

	}
					
					.img{
						width: 50px;
					}
				</style>
					 <body>
					 	<div class="noobg">
					 		<img class='img' src='../Public/img/warning.gif'><br>
						 	<div>Déjoler! Vous n'avez la permission de supprimer les reservations des autres utilisateurs</div>
						 	<a href=javascript:history.go(-1)>Retour</a>
					 	</div>
					 </body>
					 </html>
					<?php
							}

}
	elseif ($ver=="reserModif" && $admin=="admin") {
				

					// $re=mysqli_query($con,"select * from tablenow");
					// 		$val=$_GET['val'];	
				
					$ctrl->efface_Reservation($val,$id,$numd);

					$ctrl->efface_data_Lundi($val,$id);

					$ctrl->efface_data_Mardi($val,$id);

					$ctrl->efface_data_Mercredi($val,$id);

					$ctrl->efface_data_Jeudi($val,$id);

					$ctrl->efface_data_Vendredi($val,$id);

					$ctrl->efface_data_Samedi($val,$id);

					$ctrl->efface_data_Dimanche($val,$id);

					$ctrl->supprimer_Duree($duree);

					header("location: ../view/reservation_view/tableModif_view.php?name=$admin & val=$val & date1=$date1 & date2=$date2");
					
			}
		
elseif ($ver=="reserAdm") {

				$ctrl->efface_Reservation($val,$id,$numd);

					$ctrl->efface_data_Lundi($val,$id);

					$ctrl->efface_data_Mardi($val,$id);

					$ctrl->efface_data_Mercredi($val,$id);

					$ctrl->efface_data_Jeudi($val,$id);

					$ctrl->efface_data_Vendredi($val,$id);

					$ctrl->efface_data_Samedi($val,$id);

					$ctrl->efface_data_Dimanche($val,$id);
					
				$ctrl->supprimer_Duree($duree);


					header("location: ../view/reservation_view/reserAdmin_view.php?i=$numd");
				
}
				 
				 ?>




					
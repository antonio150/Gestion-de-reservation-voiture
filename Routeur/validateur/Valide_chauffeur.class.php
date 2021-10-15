<?php 
require_once ('../dao/chauffeurDao/Roles.dao.php');

class Valide_chauffeur 
{
	
	Public function verif($post,$ctrl)
	{
		if(isset($post)){
		$surnom=$_POST['nom'];
		$motpass=$_POST['mdp2'];

		session_start();

			foreach ($ctrl->verif_Chauffeur($surnom,$motpass) as $res) {
				$surnom=$res['surnomChauff'];
				$num=$res['idChauff'];
			}

			if ($surnom!=null && $num!=null) {

				$_SESSION['logged']=true;
				$_SESSION['numero'] = $num;
				$_SESSION['surnom'] = $surnom;
				$_SESSION['name'] = 'noadmin';
				$_SESSION['job'] = 'chauffeur';
				
				header("location:http://localhost:8080/projet%20php/view/reservation_view/validereserve_view.php");
				}
			else{
				
				$error = "Surnom ou mot de passe de chauffeur incorrect ";
				}

		}	

	return $error;
	}
}
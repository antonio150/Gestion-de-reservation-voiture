<?php 

class Valide_authentif_demandeur
{
	
	public function verif($post,$ctrl)
	{
		if(isset($post)){
		$surnomd=$_POST['nom'];
		$motpassd=$_POST['mdp2'];

				session_start();

		foreach ($ctrl->verif($surnomd,$motpassd) as $res) {
			$surnom=$res['surnomDem'];
			$num=$res['numDemand'];
		}

		if ($surnom!=null) {
			$_SESSION['logged']=true;
			$_SESSION['numero'] = $num;
			$_SESSION['surnom'] = $surnom;
			$_SESSION['name'] = 'noadmin';
			$_SESSION['job'] = 'demandeur';

			header("location:http://localhost:8080/projet php/view/reservation_view/reservation_view.php");
		}
		else{
			
			$error = " Surnom ou mot de passe de demandeur incorrect ";
		}

	}
	return $error;
	}
}
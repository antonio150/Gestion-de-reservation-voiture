<?php 

class Valide_authentif_admin
{
	public $post;
	public function verif($post,$bdd)
	{
		

	if(isset($post)){
		$surnom=$_POST['snom'];
		$motpass=$_POST['mdp3'];

		foreach ($bdd->authentif_Admin($surnom,$motpass) as $res3) {
			$snome=$res3['surnom_admin'];
			$pass=$res3['motpass_admin'];
		}

		if ($snome!=null) {
			session_start();

			$_SESSION['logged']=true;
			$_SESSION['numero'] = $num;
			$_SESSION['surnom'] = $surnom;
			$_SESSION['name'] = 'admin';
			$_SESSION['job'] = '';
			
			header("location: http://localhost:8080/projet%20php/view/reservation_view/reserAdmin_view.php");
			
		}
		else {
			
			$val = "Surnom ou mot de passe de Administrateur incorrect";
			}
		}

	return $val;
	}
}
<?php 
 class Connexion{
	private $host;
	private $user;
	private $passwd;
	private $option;
	private $connexion;

	public function __construct () {
		try{
			$this->host = 'mysql:host=localhost;dbname=park';
		$this->user = 'root';
		$this->passwd = '';
		

		$this->connexion = new PDO($this->host, $this->user, $this->passwd,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );

		$this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	}catch(Exception $e){
		die('Erreur : ' . $e->getMessage());
		}
	}

	public function consulter($sql){
		$contenue=$this->connexion->query($sql);
		
		return $contenue;
	}

	

	public function actualiser($sql){
		$q = $this->connexion->prepare($sql);
		$q->execute();
	}

	public function creer($sql){
		$q = $this->connexion->prepare($sql);
		$q->execute();	}

}



 ?>
 
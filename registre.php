<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../database.php';
class inscription extends database {
	private $user ;
	private $prenom ;
	private $nom ;
	private $pass ;
	public function __construct($user,$pass,$prenom,$nom){
		$this->user = $user ;
		$this->pass = $pass ;
		$this->prenom = $prenom ;
		$this->nom = $nom ;
		parent::__construct($this->username,$this->password,$this->db);
		$this->connexion($this->username,$this->password,$this->db);
	}
	public function registre($user,$pass,$prenom,$nom){
		try{
			$statement = $this->connexion($this->username,$this->password,$this->db)->exec("INSERT INTO registre VALUES (NULL,'".$this->prenom."','".$this->nom."','".$this->user."','".$this->pass."');");
			header('Location:../Acceuille/Page_acceuille.html');
			exit();
		}catch (PDOException $e) {
     header('Location:Page404');
     exit();
}
	}
}
if(isset($_POST['envoi'])){
$cnx = new inscription($_POST['identifiant'],$_POST['password'],$_POST['prenom'],$_POST['nom']);
$cnx->registre($_POST['identifiant'],$_POST['password'],$_POST['prenom'],$_POST['nom']);
}
?>
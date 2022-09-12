<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css">
	<title></title>
</head>
<header>
	 <div class="topnav">
  <a class="active" href="#home">Inscription</a>
  <a href="#news">Qui sommes nous ?</a>
  <a href="#contact">Informations Club</a>
  <a href="#about">Contact</a>
  <a href="#about">Deja Inscrit ?</a>
  <a href="#contact">Calendrier évènementiel</a>
</div>
</header>
<body>
	        <?php
          include'../database.php';
          class calendrier extends database{
          	public function __construct(){
          		parent::__construct($this->username,$this->password,$this->db);
				$this->connexion($this->username,$this->password,$this->db);
          	}
          	public function championnat(){

          		try{

          		$stmt = $this->connexion($this->username,$this->password,$this->db)->query('SELECT * FROM championnat');
          		$stmt->setFetchMode(PDO::FETCH_ASSOC);
          		echo '<label>Championnat:<select>';
          		foreach ($stmt as $key1) {
          			echo'<option>'.$key1['ch_nom'].'</option>';
          		}
          		echo '</select></label>';
          		$stmt->closeCursor();
          	}
    		catch(PDOException $e){

			  print "Erreur !: " . $e->getMessage() . "<br/>";
			    die();

			    }
          	}
          	public function manifestation(){

          		try{

          		$stmt1 = $this->connexion($this->username,$this->password,$this->db)->query('SELECT * FROM manifestation');
          		$stmt1->setFetchMode(PDO::FETCH_ASSOC);
          		echo '<label>Manifestation:<select>';
          		foreach ($stmt1 as $key2) {
          			echo'<option>'.$key2['ma_nom'].'</option>';
          		}
          		echo '</select></label>';
          		$stmt1->closeCursor();
          	}
    		catch(PDOException $e){

			  print "Erreur !: " . $e->getMessage() . "<br/>";
			    die();

			    }
          	}
          	          	public function categorie_epreuve(){

          		try{

          		$stmt2 = $this->connexion($this->username,$this->password,$this->db)->query('SELECT * FROM type_epreuve ');
          		$stmt2->setFetchMode(PDO::FETCH_ASSOC);
          		echo '<label>Catégorie épreuve:<select>';
          		foreach ($stmt2 as $key3) {
          			echo'<option>'.$key3['typep_nom'].'</option>';
          		}
          		echo '</select></label>';
          		$stmt2->closeCursor();
          	}
    		catch(PDOException $e){

			  print "Erreur !: " . $e->getMessage() . "<br/>";
			    die();

			    }
          	}
          	          	public function epreuve(){

          		try{

          		$stmt3 = $this->connexion($this->username,$this->password,$this->db)->query('SELECT * FROM epreuve');
          		$stmt3->setFetchMode(PDO::FETCH_ASSOC);
          		echo '<label>Manifestation:<select>';
          		foreach ($stmt3 as $key3) {
          			echo'<option>'.$key3['ep_nom'].'</option>';
          		}
          		echo '</select></label>';
          		$stmt3->closeCursor();
          	}
    		catch(PDOException $e){

			  print "Erreur !: " . $e->getMessage() . "<br/>";
			    die();

			    }
          	}
          	          	public function parcours(){

          		try{

          		$stmt4 = $this->connexion($this->username,$this->password,$this->db)->query('SELECT * FROM parcours');
          		$stmt4->setFetchMode(PDO::FETCH_ASSOC);
          		echo '<label>Manifestation:<select>';
          		foreach ($stmt4 as $key4) {
          			echo'<option>'.$key4['pa_nom_parcours'].'</option>';
          		}
          		echo '</select></label>';
          		$stmt4->closeCursor();
          	}
    		catch(PDOException $e){

			  print "Erreur !: " . $e->getMessage() . "<br/>";
			    die();

			    }
          	}
          	          	public function catgorie_age(){

          		try{

          		$stmt5 = $this->connexion($this->username,$this->password,$this->db)->query('SELECT * FROM categorie');
          		$stmt5->setFetchMode(PDO::FETCH_ASSOC);
          		echo '<label>Manifestation:<select>';
          		foreach ($stmt5 as $key5) {
          			echo'<option>'.$key5['cat_nom'].'</option>';
          		}
          		echo '</select></label>';
          		$stmt5->closeCursor();
          	}
    		catch(PDOException $e){

			  print "Erreur !: " . $e->getMessage() . "<br/>";
			    die();

			    }
          	}
          	          	public function maillot(){

          		try{

          		$stmt6 = $this->connexion($this->username,$this->password,$this->db)->query('SELECT * FROM inscrire');
          		$stmt6->setFetchMode(PDO::FETCH_ASSOC);
          		echo '<label>Manifestation:<select>';
          		foreach ($stmt6 as $key6) {
          			echo'<option>'.$key6['ins_taille_maillot'].'</option>';
          		}
          		echo '</select></label>';
          		$stmt6->closeCursor();
          	}
    		catch(PDOException $e){

			  print "Erreur !: " . $e->getMessage() . "<br/>";
			    die();

			    }
          	}
          	          /*	public function temps(){

          		try{

          		$stmt7 = $this->connexion($this->username,$this->password,$this->db)->query('SELECT * FROM inscrire ');
          		$stmt7->setFetchMode(PDO::FETCH_ASSOC);
          		echo '<label>Manifestation:<select>';
          		foreach ($stmt7 as $key7) {
          			echo'<option>'.$key7['ma_nom'].'</option>';
          		}
          		echo '</select></label>';
          		$stmt7->closeCursor();
          	}
    		catch(PDOException $e){

			  print "Erreur !: " . $e->getMessage() . "<br/>";
			    die();

			    }
          	}*/
          }
          $event = new calendrier();
          $event->championnat();
          $event->manifestation();
          $event->categorie_epreuve();
          $event->epreuve();
          $event->parcours();
          $event->catgorie_age();
          $event->maillot();
          ?>
</body>
<style type="text/css">
	table,
td {
    border: 1px solid #333;
}

thead,
tfoot {
    background-color: #333;
    color: #fff;
}

	form,select,option{
		flex-direction: column;
	}
	body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: rgba(0,0,0,0.1.7);
  height: 3em;
}
.titre{
    color: whitesmoke;
    position: absolute;
    font-size: 2em;
    font-weight: 300;
    font-style: italic;
    text-transform: uppercase;
    bottom:45% ;
    left: 25%;
    align-items: center;
    justify-content: center;
}

.topnav a {
  float: left;
  color: black;
  align-items: center;
  justify-content: center;
  font-weight: 500;
  line-height:20px;
  position: relative;
  left: 20%;
  flex-direction: row;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover,.topnav a.active:hover{
  color: whitesmoke;
  font-size: 24px;
  transform: translateY(2px);
}

.topnav a.active {
  color: black;
}
.container{
  flex-direction: row;
  align-items: start;
  justify-content: center;
}
.inscription{
  position: absolute;
  fill: rgba(0,0,0,0.7);
  bottom: 30%;
  left: 25%;
  height: 6%;
  width: 6%;
  border-radius: 35%;
  margin-left: 5%;
}
.connexion{
  position: absolute;
  bottom: 30%;
  fill: rgba(0,0,0,0.7);
  left: 33%;
  height: 6%;
  width: 6%;
  border-radius: 35%;
  margin-left: 5%;
}
.contact{
  position: absolute;
  bottom: 30%;
  left: 40%;
  fill: rgba(0,0,0,0.7);
  height: 6%;
  width: 6%;
  border-radius: 35%;
  margin-left: 5%;
}
.calendar{
  position: absolute;
  bottom: 30%;
  fill: rgba(0,0,0,0.7);
  left: 47%;
  height: 6%;
  width: 6%;
  border-radius: 35%;
  margin-left: 5%;
}
svg:hover{
  height: 10%;
  width: 10%;
  transform: translateY(2px);
  fill: #fff;
}
.topnav svg{
  height: 2em;
  width: 2em;
}
.slider{
    position: relative;
    height: 100vh;
    width: 100%;
    max-width: 100%;
    position: relative;
    box-sizing: border-box;

}
.container img{
    max-width: 100%;
}
.slider img{
    flex: 1;
    object-fit: cover;
    height: 100%;
    width: 100%;
    position: relative;
    top:  0%;
    display: none;
    transition: opacity .5s;

}
@keyframes fade {
    from{
        opacity: 0;
    }
    to{
        opacity: 1;
    }
}
img.active{
    display: block;
    max-width: 100%;
    animation: fade 2.5s;
}
body{
    background-image: url('https://images.unsplash.com/photo-1502904550040-7534597429ae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1100&q=80');
}
</style>
</html>
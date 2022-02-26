<?php 
session_start();
	try{
		$db = new PDO('mysql:host=localhost; dbname=db_gesco; charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}catch(Exception $e){
		die('ERROR: '.$e->getMessage());
	}
	$req = $db->query('SELECT * FROM annee_scolaire_gesco');
  while($data = $req->fetch()){

    echo "$data['id_annee_scolaire']";

  }
?>

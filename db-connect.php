<?php 
	try{
		$db = new PDO('mysql:host=localhost; dbname=db_gesco; charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}catch(Exception $e){
		die('ERROR: '.$e->getMessage());
	}
 ?>
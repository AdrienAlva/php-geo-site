<?php 

function dbConnect(){
	
	try{
		$db = new PDO('mysql:host=localhost;dbname=site-emilien;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));	
	}

	catch(Exception $e) {	
    	die('Erreur : '.$e->getMessage());
	}
	return $db;
}//EO dbConnect function -> connection to database


function readElecRessource(){

	$db = dbConnect();

    $req = $db->query('SELECT `name`, `surname`, `title`, `support`, `location`, `editor`, `publicationDate`, `majDate`, `consultation`, `url` FROM noticebiblioelectronique');

    return $req;

    

}//EO readElecRessource fucntion -> read rows from the noticebiblioelectronique table




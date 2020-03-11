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


function connexionCheck($loginId){

	$db = dbConnect();

    $req = $db->prepare('SELECT pseudo, password FROM admin WHERE pseudo = :loginId');
    $req->execute(array(
        'loginId' => $loginId));
    $result = $req->fetch();

    return $result;

}//EO connexionCheck function -> search for existing id and retrieve password from database


function addElecRessource(){

}//EO addElecRessource fucntion -> create a row in the noticebiblioelectronique table
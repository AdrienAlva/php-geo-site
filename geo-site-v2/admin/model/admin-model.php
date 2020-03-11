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


function addElecRessource($name, $surname, $title, $support, $location, $editor, $publicationDate, $majDate, $consultation, $url){

	$db = dbConnect();

    $req = $db->prepare('INSERT INTO `noticebiblioelectronique`(`name`, `surname`, `title`, `support`, `location`, `editor`, `publicationDate`, `majDate`, `consultation`, `url`) VALUES (:name, :surname, :title, :support, :location, :editor, :publicationDate, :majDate, :consultation, :url)');
    $req->execute(array(
        'name' => $name,
        'surname' => $surname,
        'title' => $title,
        'support' => $support,
        'location' => $location,
        'editor' => $editor,
        'publicationDate' => $publicationDate,
        'majDate' => $majDate,
        'consultation' => $consultation,
        'url' => $url
		));
    

}//EO addElecRessource fucntion -> create a row in the noticebiblioelectronique table
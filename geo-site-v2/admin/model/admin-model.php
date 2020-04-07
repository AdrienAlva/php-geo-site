<?php 

function dbConnect(){
	
	try{
		$db = new PDO('mysql:host=localhost;dbname=site-emilien;charset=utf8', 'root', 'freddy1991!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));	
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


function readNoticeAdmin(){

    $db = dbConnect();

    $req = $db->query('SELECT `id`, `name`, `surname`, `title`, `support`, `location`, `editor`, `publicationDate`, `majDate`, `consultation`, `url` FROM noticebiblioelectronique');

    return $req;  

}//EO readElecRessource fucntion -> read rows from the noticebiblioelectronique table


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
        'publicationDate' => (empty($publicationDate) ? NULL : $publicationDate),
        'majDate' => (empty($majDate) ? NULL : $majDate),
        'consultation' => (empty($consultation) ? NULL : $consultation),//to manage empty date form
        'url' => $url
		));
    

}//EO addElecRessource fucntion -> create a row in the noticebiblioelectronique table

function deleteNotice($noticeId){

    $db = dbConnect();

    $req = $db->prepare('DELETE FROM `noticebiblioelectronique` WHERE id = :noticeId');
    $req->execute(array(
        'noticeId' => $noticeId));
    
}//EO deleteNotice function -> delete a notice from noticebiblioelectronique table


function updateNotice($noticeId){

    $db = dbConnect();



}//EO updateNotice function -> update a notice from noticebiblioelectronique table


function readNotice($noticeId){

    $db = dbConnect();

    $req = $db->prepare('SELECT `id`,`name`, `surname`, `title`, `support`, `location`, `editor`, `publicationDate`, `majDate`, `consultation`, `url` FROM `noticebiblioelectronique` WHERE id = :noticeId');
    $req->execute(array(
        'noticeId' => $noticeId));

    return $req;
  
}//EO readElecRessource fucntion -> read rows from the noticebiblioelectronique table


function updateElecRessource($noticeId, $name, $surname, $title, $support, $location, $editor, $publicationDate, $majDate, $consultation, $url){

    $db = dbConnect();

    $req = $db->prepare('UPDATE `noticebiblioelectronique` SET `name`= :name, `surname`= :surname, `title`= :title, `support`= :support, `location`= :location, `editor`= :editor, `publicationDate`= :publicationDate, `majDate`= :majDate, `consultation`= :consultation, `url`= :url WHERE `id` =:noticeId');
    $req->execute(array(
        'noticeId' => $noticeId,
        'name' => $name,
        'surname' => $surname,
        'title' => $title,
        'support' => $support,
        'location' => $location,
        'editor' => $editor,
        'publicationDate' => (empty($publicationDate) ? NULL : $publicationDate),
        'majDate' => (empty($majDate) ? NULL : $majDate),
        'consultation' => (empty($consultation) ? NULL : $consultation),//to manage empty date form
        'url' => $url
        ));
    

}//EO updateElecRessource function -> update a row in the noticebiblioelectronique table



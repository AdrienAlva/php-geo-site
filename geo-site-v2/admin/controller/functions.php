<?php 

require("../model/admin-model.php");

function passwordVerification($password){

	$result = connexionCheck(htmlspecialchars($_POST['loginId']));

	$isPasswordCorrect = password_verify($password, $result['password']);

    if (!$result)
    {
        echo 'Identifiant incorrect !';

    } else {

        if ($isPasswordCorrect) {

            session_start();
            $_SESSION['loginId'] = $_POST['loginId']; 

            require("../view/admin-panel.php");

        } else {

            echo 'Mot de passe non-valide !';

        }//EO password verification
    }//EO id checking
}//EO controller function passwordVerification -> compare form pass to db pass. Then start session if true.
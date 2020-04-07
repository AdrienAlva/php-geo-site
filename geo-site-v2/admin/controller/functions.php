<?php 

require_once("../model/admin-model.php");

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

            header("Location: ../view/admin-panel.php");

        } else {

            echo 'Mot de passe non-valide !';

        }//EO password verification
    }//EO id checking
}//EO controller function passwordVerification -> compare form pass to db pass. Then start session if true.


function logout(){

    session_start();

    $_SESSION = array();

    session_destroy();

    echo 'Vous êtes déconnecté !';

}//EO deconnexion function -> destroy session


function managementElecBiblio(){

    $data = readNoticeAdmin();

    while($display = $data->fetch()) { ?>

        <p>
            <?php if(!empty($display['id'])){ echo '<span class=\'underlineId\'>ID de la notice :</span> [' . $display['id'] . '] - ';} ?>

            <?php if(!empty($display['name'])){ echo $display['name'] . ', ';} ?>

            <?php if(!empty($display['surname'])){ echo  $display['surname'] . '. ';} ?>

            <?php if(!empty($display['title'])){ echo '<span class=\'titleItalic\'>' . $display['title'] . '</span>' .  ' ';} ?>

            <?php if(!empty($display['support'])){ echo '[' . $display['support'] . ']' . '. ';} ?>

            <?php if(!empty($display['location'])){ echo $display['location'] . ', ';} ?>

            <?php if(!empty($display['editor'])){ echo $display['editor'] . ', ';} ?>

            <?php if(!empty($display['publicationDate'])){ echo $display['publicationDate'] . '. ';} ?>

            <?php if(!empty($display['consultation'])){ echo '[réf. du ' . $display['consultation']. ']' . '. ';} ?>

            <?php if(!empty($display['url'])){ echo 'Disponible sur : <<a href=\'' .  $display['url']  . '\'>' . $display['url'] . '</a>>';} ?>

            
            <form method="post" action="/geo-site-v2/admin/view/update-notice-form.php">
                <div id="button">
                    <button type="submit" name="update" value=<?php echo '\'' . $display['id'] . '\'' ?>>Modifier</button>
                </div>
            </form>

            <form method="post" action="/geo-site-v2/admin/controller/process-delete-notice.php">
                <div id="button">
                    <button type="submit" name="delete" value=<?php echo '\'' . $display['id'] . '\'' ?>>Supprimer</button>
                </div>
            </form>
            

            <br/>
            <br/>
            <hr/>
        </p>

        

    <?php
        
    }//EO while -> display content

    $data->closeCursor();

}//EO displayElecBiblio function 

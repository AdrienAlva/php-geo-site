<?php

session_start();

if( isset ($_SESSION['loginId'])){

	require("../model/admin-model.php");

	$data = readNotice($_POST['update']);//reprendre ici !!!!

	$title = 'Modifier une notice bibliographique';

	ob_start(); ?>

		
		<p>NOM de l'auteur, Prénom (ou organisme). Titre de la page d'accueil [type de support]. Lieu de publication : éditeur, date. Date de mise à jour. [Date de consultation]. Disponibilité et accès.
		</p>
		
		<hr/>

		<?php $display = $data->fetch() ?>

		<div id="elecForm">
		<form method="post" action="../controller/process-update-notice.php">
			<input type="hidden" name="id" value="<?php echo $display['id']; ?>">
			<label>Nom de l'auteur</label><input type="text" name="name" value="<?php echo $display['name']; ?>"><br/>
			<label>Prénom de l'auteur ou organisme : </label><input type="text" name="surname" value="<?php echo $display['surname']; ?>"><br/>
			<label>Titre de la page d'accueil : </label><input type="text" name="title" value="<?php echo $display['title']; ?>"><br/>
			<label>Type de support : </label><input type="text" name="support" name="title" value="<?php echo $display['support']; ?>"><br/>
			<label>Lieux de publication : </label><input type="text" name="location" name="title" value="<?php echo $display['location']; ?>"><br/>
			<label>Editeur : </label><input type="text" name="editor" name="title" value="<?php echo $display['editor']; ?>"><br/>
			<label>Date de publication : </label><input type="date" name="publicationDate" name="title" value="<?php echo $display['publicationDate']; ?>"><br/>
			<label>Date de mise à jour : </label><input type="date" name="majDate" name="title" value="<?php echo $display['majDate']; ?>"><br/>
			<label>Date de consultation : </label><input type="date" name="consultation" name="title" value="<?php echo $display['consultation']; ?>"><br/>
			<label> URL : </label><input type="url" name="url" name="title" value="<?php echo $display['url']; ?>"><br/>
			<div id="submitButton"><input  type="submit" name="valider" value="Modifier"></div>
		</form>
		</div>

		<hr/>

		<div class="noticeManagementLinks">
		<a href="/geo-site-v2/admin/view/admin-panel.php">Accueil administrateur</a>
		<span> / </span>
		<a href="../controller/logout.php">Déconnexion</a>
		</div>

	<?php $content = ob_get_clean();

	require("admin-template.php");


}//EO if( isset ($_SESSION['loginId']))
else{
	echo 'Accès non-autorisé.';
}
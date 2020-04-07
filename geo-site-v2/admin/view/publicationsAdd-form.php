<?php

session_start();

if( isset ($_SESSION['loginId'])){

	$title = 'Ajouter une notice bibliographique';

	ob_start(); ?>

		
		<p>NOM de l'auteur, Prénom (ou organisme). Titre de la page d'accueil [type de support]. Lieu de publication : éditeur, date. Date de mise à jour. [Date de consultation]. Disponibilité et accès.
		</p>
		
		<hr/>

		<div id="elecForm">
		<form method="post" action="../controller/process-publicationAdd.php">
			<label>Nom de l'auteur</label><input type="text" name="name"><br/>
			<label>Prénom de l'auteur ou organisme : </label><input type="text" name="surname"><br/>
			<label>Titre de la page d'accueil : </label><input type="text" name="title"><br/>
			<label>Type de support : </label><input type="text" name="support"><br/>
			<label>Lieux de publication : </label><input type="text" name="location"><br/>
			<label>Editeur : </label><input type="text" name="editor"><br/>
			<label>Date de publication : </label><input type="date" name="publicationDate"><br/>
			<label>Date de mise à jour : </label><input type="date" name="majDate"><br/>
			<label>Date de consultation : </label><input type="date" name="consultation"><br/>
			<label> URL : </label><input type="url" name="url"><br/>
			<div id="submitButton"><input  type="submit" name="valider" value="Ajouter"></div>
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
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>

	<h1>Admin panel</h1>

	<form method="post" action="../controller/process-connexion.php">
		<label>Identifiant : </label><input type="text" name="loginId" required>
		<label>Mot de passe : </label><input type="password" name="password" required>
		<input type="submit" name="valider">
	</form>



</body>
</html>
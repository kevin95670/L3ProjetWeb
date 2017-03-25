<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="stylesheet" href="http://localhost/Projet/font-awesome-4.7.0/css/font-awesome.min.css">
		<title>AcTVty</title>
	</head>

	<body>

		<?php require("headerDisconnected.php"); ?>
		<div class="main-content">
			<div class="inscription">
			<h1>Inscrivez-vous ! <h1>
				<form method="post" action="traitement.php">
				      <input type="text" name="nom" placeholder="Votre nom" maxlength="30"/><br/>
				      <input type="text" name="prenom" placeholder="Votre prénom" maxlength="30"/><br/>
				      <input type="text" name="pseudo" placeholder="Votre pseudo" maxlength="30"/><br/>
				      <input type="password" name="mdp" placeholder="Votre mot de passe" maxlength="40"/><br/>
				      <input type="email" name="email" placeholder="Votre mail" maxlength="45"/><br/>
				     <label>Votre sexe :</label> <input type="radio" name="genre" value="male" checked> Homme
  					  <input type="radio" name="genre" value="female"> Femme<br/>
  					   <label>Votre date de naissance :</label>
  					    <input type="date" name="naissance" placeholder="jour/mois/année"><br/>
  					    <input type="submit" value="Valider">
				</form>
			</div>
		</div>
		<?php require("right-side.php"); ?>

		<?php require("footer.php"); ?>

	</body>

</html>

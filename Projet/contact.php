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


		<?php
		/*if($_POST) {

		$emetteur=$_POST['emailContact'];
		$message=$_POST['comment'];

		mail("kevin-leonard@orange.fr", "contact AcTVty", $message, $emetteur) ;

		}*/
		?>

		<div class="main-content">
			<h1>Contactez-nous via ce formulaire</h1>
			<form name="contact" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
			<input type="email" name="emailContact" placeholder="Entrez votre adresse mail"><br/>
			<textarea name="comment" rows="8" cols="50">Entrez votre demande</textarea><br/>
			<input type="submit" value="envoyer">
			</form>
		</div>

		<?php require("right-side.php"); ?>

		<?php require("footer.php"); ?>

	</body>

</html>

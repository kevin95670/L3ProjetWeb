<?php require("../../Projet/html/headerHTML.html"); ?>
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

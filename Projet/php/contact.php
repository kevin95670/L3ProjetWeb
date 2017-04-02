<?php session_start();?>
<?php require("../../Projet/html/headerHTML.html"); ?>

<?php if (!empty($_SESSION['connecte']))
{
	require("headerConnected.php");
}
else
{
	require("headerDisconnected.php");
}
?>


<?php
		if($_POST) {


		$headers = "From:".$_POST['emailContact']. "\r\n";
		$message=$_POST['comment'];

		mail("kevin-leonard@orange.fr", "contact AcTVty", $message, $headers) ;

	}
	?>

	<div class="main-content">
		<div class="contact identification">
			<h1 class="bg-yellow">Contactez-nous via ce formulaire</h1>
			<form name="contact" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
				<p><input type="email" name="emailContact" placeholder="Entrez votre adresse mail"></p>
				<p><textarea name="comment" rows="8" cols="50">Entrez votre demande.</textarea></p>
				<p><input type="submit" value="Envoyer"></p>
			</form>
		</div>
	</div>

	<?php require("right-side.php"); ?>

	<?php require("footer.php"); ?>

</body>

</html>

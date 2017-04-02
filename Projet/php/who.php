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

<div class="main-content">
	<div class="who">
		<h1 class="bg-yellow">Qui sommes nous ?</h1>
		<img src="../../Projet/images/stream.png" width="250" alt="streaming" />
		<p>Ac<i class="fa fa-television" aria-hidden="true"></i>ty est une site de streaming non officiel où vous pourrez retrouver des centaines de séries.</p>
		<h2>Il manque une série? <i class="fa fa-frown-o" aria-hidden="true"></i></h2>
		<p>N'hésitez surtout pas à nous contacter via ce <a href="contact.php">formulaire</a> pour nous faire part de vos envies au niveau des séries. <i class="fa fa-smile-o" aria-hidden="true"></i></p>
	</div>
</div>

<?php require("right-side.php"); ?>

<?php require("footer.php"); ?>

</body>

</html>
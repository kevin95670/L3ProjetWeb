<?php session_start();?>
<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="stylesheet" href="http://localhost/Projet/font-awesome-4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="../Projet/script.js"></script>
		<title>AcTVty</title>
	</head>

	<body>

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
			<h2>yo</h2>
		</div>

		<?php require("right-side.php"); ?>

		<?php require("footer.php"); ?>

	</body>

</html>
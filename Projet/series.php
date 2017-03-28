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
			<div class="series">
			<h1>Vos séries</h1>
			<h3>Classez vos séries par : </h3> 
				<form class="filter" action="series.php" action="get">
					 <select>
	  					    <option>Par genre</option><option>Par note</option><option>Les plus commentées</option><option>Par date de sortie</option>
	  					    <option>Par ordre alphabétique</option><option>Par pays</option>

	  					</select>
				</form>
			</div>
			<?php for($serie=0;$serie<3;$serie++){?>
			<div class="each-serie">
				<a href="#"><img src="../Projet/images/serie.jpg" alt="titre"/></a>
				<h4>Titre<h4/>
				<p>Note </p>

			</div>

				<?php }?>
				<div class="pagination">
					<a href="#">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
				</div>
		</div>

		<?php require("right-side.php"); ?>

		<?php require("footer.php"); ?>

	</body>

</html>
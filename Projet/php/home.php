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
                <h1 class="bg-yellow">yo</h1>
            </div>

            <?php require("right-side.php"); ?>

                <?php require("footer.php"); ?>

	</body>

</html>
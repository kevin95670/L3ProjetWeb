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
                <div class="series">
                    <h1 class="bg-yellow">Vos séries</h1>
                    <h3>Classez vos séries par : </h3>
                    <form class="filter" action="series.php" method="get">
                        <select>
                            <option>Par genre</option>
                            <option>Par note</option>
                            <option>Les plus commentées</option>
                            <option>Par date de sortie</option>
                            <option>Par ordre alphabétique</option>
                            <option>Par pays</option>

                        </select>
                    </form>
                </div>
                <?php for($serie=0;$serie<3;$serie++){?>
                    <div class="each-serie">
                        <a href="#"><img src="../../Projet/images/serie.jpg" alt="titre" /></a>
                        <h4>Titre</h4>
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
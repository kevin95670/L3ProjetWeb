<?php require("../../Projet/html/headerHTML.html"); ?>

    <?php require("headerConnected.php"); ?>

        <div class="main-content">
            <div class="inscription identification">
                <h1 class="bg-yellow">Mes préférences</h1>
                <form method="post" action="inscrit.php">
                    <p>
                        <label>Couleurs du site :</label>
                        <input type="radio" name="mode" id="night" value="night" checked>
                        <label for="night"><i class="fa fa-moon-o" aria-hidden="true"></i> Mode nuit</label>
                        <input type="radio" name="mode" id="day" value="day">
                        <label for="day"><i class="fa fa-sun-o" aria-hidden="true"></i> Mode jour</label>
                    </p>

                    <p>
                        <input type="submit" value="Valider ces préférences">
                    </p>
                </form>
            </div>
        </div>
        <?php require("right-side.php"); ?>

            <?php require("footer.php"); ?>

    </body>

</html>
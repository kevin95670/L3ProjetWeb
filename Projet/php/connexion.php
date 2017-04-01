<?php require("../../Projet/html/headerHTML.html"); ?>
    <?php require("headerDisconnected.php"); ?>
        <div class="main-content">
            <div class="connexion identification">
                <h1>Connectez-vous </h1>
                <form method="post" action="traitement.php">
                    <p><i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" name="pseudo" placeholder="Votre pseudo" maxlength="30" />
                    </p>
                    <p><i class="fa fa-unlock-alt" aria-hidden="true"></i>
                        <input type="password" name="mdp" placeholder="Votre mot de passe" maxlength="40" />
                    </p>
                    <p>
                        <input type="submit" value="Connexion">
                    </p>
                </form>
            </div>
        </div>
        <?php require("right-side.php"); ?>

            <?php require("footer.php"); ?>

    </body>

</html>
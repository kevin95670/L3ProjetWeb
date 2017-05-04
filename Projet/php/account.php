<?php require("../../Projet/html/headerHTML.html"); ?>

    <?php require("headerConnected.php"); 
    session_start(); ?>

        <div class="main-content">
            <div class="modification identification">
                <h1 class="bg-yellow">Modifiez votre profil</h1>
                <form method="post" action="update.php">
                    <p>
                        <label><?php echo $_SESSION['pseudo'];?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></label>
                        <input id="newPseudo" type="text" name="newPseudo" placeholder="Nouveau pseudo" maxlength="30" />
                        <span id="erreur-pseudo"></span>
                    </p>
                    <p>
                        <input id="old" type="password" name="old" placeholder="Ancien mot de passe" maxlength="40" />
                    </p>
                    <p>
                        <input id="new" type="password" name="new" placeholder="Nouveau mot de passe" maxlength="40" />
                    </p>
                    <p>
                        <input id="newConfirm" type="password" name="newConfirm" placeholder="Répeter mot de passe" maxlength="40" />
                    </p>
                   <!-- <p>
                        <label>Ancien mail <i class="fa fa-long-arrow-right" aria-hidden="true"></i></label>
                        <input type="email" name="email" placeholder="Nouveau mail" maxlength="45" />
                    </p>-->
                    <p>
                        <label>Votre sexe :</label>
                        <input type="radio" name="genre" id="male" value="male" checked>
                        <label for="male"><i class="fa fa-male" aria-hidden="true"></i> Homme</label>
                        <input type="radio" name="genre" id="female" value="female">
                        <label for="female"><i class="fa fa-female" aria-hidden="true"></i> Femme</label>
                    </p>
                    <p>
                        <input type="submit" value="Mettre à jour">
                    </p>
                </form>
            </div>
        </div>
        <?php require("right-side.php"); ?>

            <?php require("footer.php"); ?>

    </body>

</html>
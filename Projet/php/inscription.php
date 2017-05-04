<?php require("../../Projet/html/headerHTML.html"); ?>

    <?php require("headerDisconnected.php"); ?>

        <div class="main-content">
            <div class="inscription identification">
                <h1 class="bg-yellow">Inscrivez-vous !</h1>
                <form id="form" method="post" action="inscrit.php">
                    <p>
                        <input id="pseudo" type="text" name="pseudo" placeholder="Votre pseudo" maxlength="30" />
                        <span id="erreur-pseudo"></span>
                    </p>
                    <p>
                        <input id="motPasse" name="mdp" placeholder="Votre mot de passe" maxlength="40" type="password">
                    </p>
                    <p>
                        <input id="confirm" name="confirm" placeholder="Confirmation" maxlength="40" type="password">
                        <span id="erreur-mdp"></span>
                    </p>
                    <!--<p>
                        <input id="mail" name="mail" placeholder="Votre mail" maxlength="45" type="email">
                        <span id="erreur-mail"></span>
                    </p>-->
                    <p>
                        <label>Votre sexe :</label>
                        <input type="radio" name="genre" id="male" value="m" checked>
                        <label for="male"><i class="fa fa-male" aria-hidden="true"></i> Homme</label>
                        <input type="radio" name="genre" id="female" value="f">
                        <label for="female"><i class="fa fa-female" aria-hidden="true"></i> Femme</label>
                    </p>
                    <p>
                        <input id='submit-inscription' type="submit" value="Créer mon compte">
                    </p>
                </form>
            </div>
        </div>
        <?php require("right-side.php"); ?>

            <?php require("footer.php"); ?>

    </body>

</html>
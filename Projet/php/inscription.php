<?php require("../../Projet/html/headerHTML.html"); ?>

    <?php require("headerDisconnected.php"); ?>

        <div class="main-content">
            <div class="inscription identification">
                <h1 class="bg-yellow">Inscrivez-vous !</h1>
                <form method="post" action="inscrit.php">
                    <p>
                        <input type="text" name="nom" placeholder="Votre nom" maxlength="30" />
                    </p>
                    <p>
                        <input type="text" name="prenom" placeholder="Votre prénom" maxlength="30" />
                    </p>
                    <p>
                        <input type="text" name="pseudo" placeholder="Votre pseudo" maxlength="30" />
                    </p>
                    <p>
                        <input type="password" name="mdp" placeholder="Votre mot de passe" maxlength="40" />
                    </p>
                    <p>
                        <input type="email" name="email" placeholder="Votre mail" maxlength="45" />
                    </p>
                    <p>
                        <label>Votre sexe :</label>
                        <input type="radio" name="genre" id="male" value="male" checked>
                        <label for="male"><i class="fa fa-male" aria-hidden="true"></i> Homme</label>
                        <input type="radio" name="genre" id="female" value="female">
                        <label for="female"><i class="fa fa-female" aria-hidden="true"></i> Femme</label>
                    </p>
                    <p>
                        <label>Votre date de naissance :</label>
                        <select>
                            <?php 
  					    for($jour = 1;$jour<32;$jour++)
  					    {
  					    ?>
                                <option>
                                    <?php echo $jour; ?>
                                </option>
                                <?php } ?>
                        </select>
                        <select>
                            <option>Janvier</option>
                            <option>Février</option>
                            <option>Mars</option>
                            <option>Avril</option>
                            <option>Mai</option>
                            <option>Juin</option>
                            <option>Juillet</option>
                            <option>Août</option>
                            <option>Septembre</option>
                            <option>Octobre</option>
                            <option>Novembre</option>
                            <option>Décembre</option>
                        </select>
                        <select>
                            <?php 
  					    for($annee = 2000;$annee>1950;$annee--)
  					    {
  					    ?>
                                <option>
                                    <?php echo $annee; ?>
                                </option>
                                <?php } ?>
                        </select>
                    </p>
                    <p>
                        <input type="submit" value="Créer mon compte">
                    </p>
                </form>
            </div>
        </div>
        <?php require("right-side.php"); ?>

            <?php require("footer.php"); ?>

    </body>

</html>
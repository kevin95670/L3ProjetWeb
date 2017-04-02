<?php require("../../Projet/html/headerHTML.html"); ?>

    <?php require("headerConnected.php"); ?>

        <div class="main-content">
            <div class="modification identification">
                <h1 class="bg-yellow">Modifiez votre profil</h1>
                <form method="post" action="inscrit.php">
                    <p class="avatar">
                        <img src="../../Projet/images/avatar.jpg" width="60" height="60" alt="avatar">
                    </p>
                    <p>
                        <input type="button" value="Sélectionner un fichier">
                    </p>
                    <p>
                        <label>Ancien nom <i class="fa fa-long-arrow-right" aria-hidden="true"></i></label>
                        <input type="text" name="nom" placeholder="Nouveau nom" maxlength="30" />
                    </p>
                    <p>
                        <label>Ancien prénom <i class="fa fa-long-arrow-right" aria-hidden="true"></i></label>
                        <input type="text" name="prenom" placeholder="Nouveau prénom" maxlength="30" />
                    </p>
                    <p>
                        <label>Ancien pseudo <i class="fa fa-long-arrow-right" aria-hidden="true"></i></label>
                        <input type="text" name="pseudo" placeholder="Nouveau pseudo" maxlength="30" />
                    </p>
                    <p>
                        <label>Ancien mot de passe <i class="fa fa-long-arrow-right" aria-hidden="true"></i></label>
                        <input type="password" name="mdp" placeholder="Nouveau mot de passe" maxlength="40" />
                    </p>
                    <p>
                        <label>Ancien mail <i class="fa fa-long-arrow-right" aria-hidden="true"></i></label>
                        <input type="email" name="email" placeholder="Nouveau mail" maxlength="45" />
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
                        <input type="submit" value="Mettre à jour">
                    </p>
                </form>
            </div>
        </div>
        <?php require("right-side.php"); ?>

            <?php require("footer.php"); ?>

    </body>

</html>
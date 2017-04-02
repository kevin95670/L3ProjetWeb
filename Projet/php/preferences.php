<?php require("../../Projet/html/headerHTML.html"); ?>

<?php require("headerConnected.php"); ?>

<div class="main-content">
    <div class="preferences identification">
        <h1 class="bg-yellow">Mes préférences</h1>
        <form method="post" action="inscrit.php" autocomplete="off">
            <p>
                <label>Couleurs du site :</label>
                <input type="radio" name="mode" id="night" value="night" checked>
                <label for="night"><i class="fa fa-moon-o" aria-hidden="true"></i> Mode nuit</label>
                <input type="radio" name="mode" id="day" value="day">
                <label for="day"><i class="fa fa-sun-o" aria-hidden="true"></i> Mode jour</label>
            </p>
            <p>
                <label>Votre police pour les messages :</label>
                <select class="choice-font">
                    <option selected="selected" value="courier">Courier</option>
                    <option value="arial">Arial</option>
                    <option value="helvetica">Helvetica</option>
                    <option value="verdana">Verdana</option>
                    <option value="avantgarde">Avantgarde</option>
                    <option value="impact">Impact</option>
                    <option value="freemono">FreeMono</option>
                </select>
            </p>
            <p><label>Voici la police que vous avez choisie :</label><span class="font"> Votre police</span></p>
            <p>
                <label>Votre couleur pour les messages :</label>
                <select class="choice-color">
                    <option selected="selected" value="noir">Noir</option>
                    <option value="vert">Vert</option>
                    <option value="rouge">Rouge</option>
                    <option value="jaune">Jaune</option>
                    <option value="bleue">Bleue</option>
                    <option value="marron">Marron</option>
                    <option value="orange">Orange</option>
                </select>
            </p>
            <p><label>Voici la couleur que vous avez choisie :</label><span class="color"> Votre couleur</span></p>
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
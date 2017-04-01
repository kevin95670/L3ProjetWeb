<?php //Permet de tester les 2 header
if (isset($_POST['nom']) && !empty($_POST['nom']))
{?>

    <?php session_start();
$_SESSION['connecte'] = 1;
?>

        <p>Inscription réussie!</p>
        <meta http-equiv="refresh" content="2; URL=../../Projet/php/home.php" />

        <?php 
}
?>
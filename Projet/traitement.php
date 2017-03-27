

<?php //On utilise l'URL pour l'instant pour savoir si un utilisateur est connecté juste pour pouvoir testé les 2 headers
if (isset($_POST['pseudo']) && !empty($_POST['pseudo']))
{?>

<?php session_start();
$_SESSION['connecte'] = 1;
?>

<p>Vous êtes connecté!</p>
<meta http-equiv="refresh" content="2; URL=../Projet/home.php" />

<?php 
}
?>

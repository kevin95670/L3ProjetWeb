<?php session_start();?>

<!--On utilise l'URL pour l'instant pour savoir si un utilisateur est connecté juste pour pouvoir testé les 2 headers -->
<p>Vous êtes déconnecté!</p>
<meta http-equiv="refresh" content="2; URL=../Projet/home.php" />

<?php session_destroy();
?>
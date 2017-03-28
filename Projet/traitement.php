

<?php //Ce code PHP permet juste de tester les 2 header
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

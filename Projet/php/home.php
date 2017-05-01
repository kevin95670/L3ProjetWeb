<?php session_start();?>
<?php require("../../Projet/html/headerHTML.html"); ?>

<?php if (!empty($_SESSION['connecte']))
{
 require("headerConnected.php");
}
else
{
 require("headerDisconnected.php");
}
?>

<div class="main-content">
    <h1 class="bg-yellow">Bienvenue sur Ac<i class="fa fa-television" aria-hidden="true"></i>ty</h1>
    <div id="diaporama">
        <div id="diapo-img">
       <img src="../../Projet/images/vampire.jpg" alt="diaporama"/>
       <img src="../../Projet/images/vampire.jpg" alt="diaporama"/>
       <img src="../../Projet/images/vampire.jpg" alt="diaporama"/>
       <img src="../../Projet/images/vampire.jpg" alt="diaporama"/>
   </div>
       <div id="legend">
        <a href="#">Legende</a>
    </div>
    <div id="diapo-fleches">
        <span id="diapo-gauche">&lt;</span>
        <span id="diapo-droite">&gt;</span>
    </div>
   </div>
   <div class="coeur">
    <h2 class="bg-yellow">Voici notre coup de coeur du mois !</h2>
    <div class="serie-coeur">
        <a class="img-serie" href="#"><img src="../../Projet/images/serie.jpg" alt="titre" /></a>
        <h4>Titre</h4>
        <p>Note </p>
    </div>
    <div class="resume-coeur">
    <h2 class="bg-yellow">Résumé</h2>
<p> résumé </p>
</div>
</div>

</div>

<?php require("right-side.php"); ?>

<?php require("footer.php"); ?>

</body>

</html>
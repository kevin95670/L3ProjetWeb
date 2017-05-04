<?php //Ce code PHP permet juste de tester les 2 header

$user = "root";
$mdpBDD = "root";
$pseudo = htmlspecialchars($_POST['pseudo']);
$mdp= sha1($_POST['mdp']);


try{ 
	$bd = new PDO("mysql:host=localhost;dbname=actvty;charset=utf8",$user,$mdpBDD);
}

catch(Exception $e){
	echo "Erreur de Connexion à la base de données";
}

if (isset($pseudo) && !empty($pseudo) && isset($mdp) && !empty($mdp))
	$requete="SELECT PSEUDO from utilisateurs where PSEUDO=:pseudo ";

$req=$bd->prepare($requete);
$req->bindValue(':pseudo',$pseudo);
$req->execute();


$res=$req->fetchAll();



if(count($res)==0)
{
	echo "Le pseudo n'existe pas";
	?>
	<meta http-equiv="refresh" content="2; URL=../../Projet/php/connexion.php" /> 
	<?php
}
else 
{

	$requete2="SELECT PWD from utilisateurs where PSEUDO=:pseudo";
	$req=$bd->prepare($requete2);
	$req->bindValue(':pseudo',$pseudo);
	$req->execute();

	$res=$req->fetch(PDO::FETCH_ASSOC);


	if(($res['PWD'])==$mdp)
	{

		$requete3 = "SELECT sexe from utilisateurs where pseudo=:pseudo";
		$req=$bd->prepare($requete3);
		$req->bindValue(':pseudo',$pseudo);
		$req->execute();

		$res=$req->fetch(PDO::FETCH_ASSOC);
		$genre = $res['sexe'];
		echo 'Connexion réussie';
		session_start();
		$_SESSION['connecte'] = 1; 
		$_SESSION['pseudo'] = $pseudo;
		$_SESSION['mdp'] = $mdp;
		$_SESSION['genre'] = $genre;?>
		<meta http-equiv="refresh" content="2; URL=../../Projet/php/home.php" /> 
		<?php
	}
	else
	{ 
		echo 'Erreur de mot de passe';
		?>
		<meta http-equiv="refresh" content="2; URL=../../Projet/php/connexion.php" /> 
		<?php
	}

}

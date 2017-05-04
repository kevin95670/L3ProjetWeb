<?php //Ce code PHP permet juste de tester les 2 header

$pseudo = htmlspecialchars($_POST['pseudo']);
$mdp= sha1($_POST['mdp']);
$confirmation = sha1($_POST['confirm']);
//$mail = htmlspecialchars($_POST['mail']);
$genre = $_POST['genre'];


try{ 
	$bd = new PDO("mysql:host=localhost;dbname=actvty;charset=utf8","root","root");
}

catch(Exception $e){
	echo "Erreur de Connexion à la base de données";
}

if (isset($pseudo) && !empty($pseudo))
{
	$requete="SELECT PSEUDO from utilisateurs where PSEUDO=:pseudo ";

	$req=$bd->prepare($requete);
	$req->bindValue(':pseudo',$pseudo);
	$req->execute();

	$res=$req->fetchAll();
	if(count($res)==0)
	{
		if(isset($_POST['mdp']) && !empty($_POST['mdp']) && isset($_POST['confirm']) && !empty($_POST['confirm']) && isset($genre))
		{
		
		if($mdp == $confirmation)
		{
			date_default_timezone_set('Europe/Paris');
			$dateIns = date("Y-m-d H:i:s");

			$requete="INSERT INTO utilisateurs VALUES (:pseudo, :mdp, :dateIns, :genre)";

			$req=$bd->prepare($requete);
			$req->bindValue(':pseudo',$pseudo);
			$req->bindValue(':mdp',$mdp);
			$req->bindValue(':dateIns',$dateIns);
			$req->bindValue(':genre',$genre);
			$req->execute();

			session_start();
			$_SESSION['connecte'] = 1;
			$_SESSION['pseudo'] = $pseudo;
			$_SESSION['mdp'] = $mdp;
			$_SESSION['genre'] = $genre;
			?>
			<?php
			echo "Inscription réussie !";?>
			<meta http-equiv="refresh" content="2; URL=../../Projet/php/home.php" />
			<?php
		}
		else
		{
			echo "Les mots de passe sont différents";
			?>
			<meta http-equiv="refresh" content="2; URL=../../Projet/php/inscription.php" /> 
			<?php
		}

		}
		else{
			echo "Veuillez saisir un mot de passe";
			?>
			<meta http-equiv="refresh" content="2; URL=../../Projet/php/inscription.php" /> 
			<?php
		}
	}
	else
	{
		echo "existant";
	}
}
else{
	echo "Veuillez remplir les champs";
			?>
			<meta http-equiv="refresh" content="2; URL=../../Projet/php/inscription.php" /> 
			<?php
}

?>
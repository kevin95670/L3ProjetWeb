<?php //Ce code PHP permet juste de tester les 2 header

$pseudo = htmlspecialchars($_POST['newPseudo']);
$old = sha1($_POST['old']);
$mdp= sha1($_POST['new']);
$confirmation = sha1($_POST['newConfirm']);
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
		$requete2="UPDATE utilisateurs set :newPseudo where PSEUDO=:oldPseudo ";

	$req=$bd->prepare($requete2);
	$req->bindValue(':newPseudo',$pseudo);
	$req->bindValue(':oldPseudo',$_SESSION['pseudo']);
	$req->execute();
	session_start();
	$_SESSION['pseudo'] = $pseudo;
	}
	else
	{
		echo "existant";
	}
}

if(isset($old) && !empty($old) && isset($mdp) && !empty($mdp) && isset($confirmation) && !empty($confirmation))
{
	$requete2="SELECT PWD from utilisateurs where PSEUDO=:pseudo";
	$req=$bd->prepare($requete2);
	$req->bindValue(':pseudo',$_SESSION['pseudo']);
	$req->execute();

	$res=$req->fetch(PDO::FETCH_ASSOC);

	if(($res['PWD'])==$old){

	}
}

?>
<?php

require_once("config.php");
require_once("fonctions.php");

$pdo=connexion();

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$pseudo = $_POST['pseudo'];
$motdepasse = sha1($_POST['motdepasse']); // haché le mot de passe (sécurité en cas hack bdd)
/** $avatar = $_POST['avatar']; */

$req = $pdo->prepare('INSERT INTO utilisateurs(nom, prenom, email, pseudo, motdepasse) VALUES(:nom, :prenom, :email, :pseudo, :motdepasse)');
$req->execute(array(
	'nom' => $nom,
	'prenom' => $prenom,
	'email' => $email,
	'pseudo' => $pseudo,
	'motdepasse' => $motdepasse,
	));

require_once("connected.php");

header('Location: ../index.php?accueil=true&inscription=true');
exit();

?>

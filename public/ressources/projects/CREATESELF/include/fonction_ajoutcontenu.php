<?php

include("config.php");
include("fonctions.php");

$pdo=connexion();
$iduser = $_GET['id'];

$balise = $_POST['balise'];
$theme = $_POST['theme'];
$texte = $_POST['texte'];
$pageref = $_POST['pageref'];
$ordre = $_POST['ordre'];
$classe = $_POST['classe'];
$categorie = $_POST['categorie'];

$req = $pdo->prepare('INSERT INTO contenus(balise,theme,texte,pageref,ordre,classe,id_categorie) VALUES(:balise,:theme,:texte,:pageref,:ordre,:classe,:id_categorie)');
$req->execute(array(
	'balise' => $balise,
	'theme' => $theme,
	'texte' => $texte,
	'pageref' => $pageref,
	'ordre' => $ordre,
	'classe' => $classe,
	'id_categorie' => $categorie,
	));

header('Location: ../index.php?profil=true&connexion=true&id='.$iduser);
exit();
		
?>

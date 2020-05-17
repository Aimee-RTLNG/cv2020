<?php

include("config.php");
include("fonctions.php");
include("connected.php");

$pdo=connexion();
$iduser = $_GET['id'];

$contenuref = $_POST['contenuref'];

$req = $pdo->prepare('DELETE FROM contenus WHERE id = :contenuref');
$req->execute(array(
	':contenuref' => $contenuref
	));

header('Location: ../index.php?profil=true&connexion=true&id='.$iduser);

?>
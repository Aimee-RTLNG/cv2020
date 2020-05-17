<?php

include("config.php");

function ajoutPage($pdo, $titrepage,$iduser) {
	$req = $pdo->prepare('INSERT INTO pages(titre, iduser) VALUES(:titre, :iduser)');
	$req->execute(array(
		'titre' => $titrepage,
		'iduser'=> $iduser,
		));
}

function ajoutCategorie($pdo, $nom, $iduser) {
	$req = $pdo->prepare('INSERT INTO categories(nom, iduser) VALUES(:nom, :iduser)');
	$req->execute(array(
		'nom' => $nom,
		'iduser'=> $iduser,
		));
}

?>

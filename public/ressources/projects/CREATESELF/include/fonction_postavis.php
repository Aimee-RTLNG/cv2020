<?php

include("config.php");
include("fonctions.php");

$pdo=connexion();

$note = $_POST['note'];
$texte = $_POST['texte'];
$pageref = $_POST['pageref'];
$iduser = $_GET['iduser'];

    $req = $pdo->prepare('INSERT INTO avis(note,texte, pageref) VALUES(:note, :texte, :pageref)');
    $req->execute(array(
       'note' => $note,
       'texte' => $texte,
       'pageref' => $pageref)
	);
	
header('Location: ../index.php?pageuser=true&id='.$iduser);
exit();

?>

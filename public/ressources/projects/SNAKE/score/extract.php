<?php

// connexion
$pdo = new PDO('mysql:host=base.iha.unistra.fr;dbname=score;charset=utf8', 'hike', 'oOR4AF!0jhJrkyOm');

// on commence avec un tableau vide
$tab_objets= array();


$sql ="select * from scores";

if ($query = $pdo->query($sql)) {
    // on r�cup�re les entit� sous forme d'objets
    while ($objet = $query->fetch(PDO::FETCH_OBJ)) {
        // chaque objet est ajout� au tableau
        array_push($tab_objets, $objet);
    }
    // le tableau final est encod� en JSON
    $result = array('ok' => true, 'message' => $pdo->errorInfo(), 'objets' => $tab_objets);
}
else {
    $result = array('ok' => false, 'message' => $pdo->errorInfo(), 'objets' => $tab_objets);
}

echo json_encode($result);

?>
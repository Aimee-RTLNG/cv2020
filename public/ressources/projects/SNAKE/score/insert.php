<?php

include('score.class.php');

$obj = new Score();
$result = $obj->chargePOST();
$tab_objets= array();
$html = '';

if ($result['ok']) {
    $ok = $obj ->insertIntoDB();
    $ok = $result['ok'];
    $objet = $obj->chargePOST();
    array_push($tab_objets, $objet);
    $result = array('message' => 'insertion réussie', 'html' => $html, 'objets' => $tab_objets);
    if ($ok) {
        $html = $obj->affiche();
    }
    else {
        $result['message'] = 'insertion ratée';
    }
}

// else $result contient d�j� les messages d'erreur

$json = json_encode($result);
echo $json;

?>
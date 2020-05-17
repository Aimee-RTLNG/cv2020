<?php

session_start();
if (empty($_SESSION['id'])) {
    $iduser = "visitor";
}
else {$iduser = $_SESSION['id'];}

if (empty($_SESSION['pseudo'])) {
    $pseudouser = "Visiteur";
}
else {$pseudouser = $_SESSION['pseudo'];}

?>
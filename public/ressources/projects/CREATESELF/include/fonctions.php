<?php

include('config.php');

function connexion() {
  // connexion
  global $config;
  $pdo = new PDO($config['driver'].':host='.$config['serveur'].';dbname='.$config['base'].';charset=utf8', $config['utilisateur'], $config['mdp']);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  // test de la variable PDO et renvoi de sa valeur
  if ($pdo) {
    return $pdo;
  }
  else {
    echo '<p>Connexion impossible !</p>';
    exit; // arrêt des scripts PHP
  }
}

?>
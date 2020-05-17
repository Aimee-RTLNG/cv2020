<!doctype html>
<html lang="fr">
<head>
    <title>Create Self</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/connexion.css">
		<link rel="stylesheet" type="text/css" href="css/avis.css">
    <link rel="stylesheet" type="text/css" href="css/profil.css">
    <link rel="stylesheet" type="text/css" href="css/contenu.css">
    <link rel="stylesheet" type="text/css" href="css/community.css">
	    <link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="icon" type="image/ico" href="uploads/logo.ico" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<body>

<div class="header">
    <div>
        <img class="logo" src="uploads/logo.svg" alt="Logo Create Self">
    </div>
    <p class="title"> CREATE </p><br>
    <p class="title"> SELF </p>
</div>

<nav class="menu">
    <ul>
	<?php
        require_once ('include/connected.php');
        if (empty($_SESSION['id'])) {
            echo "<li><a href=\"index.php?accueil=true&id=".$iduser."\">Accueil</a></li>";
        }
         if (!empty($_SESSION['id'])) {
            echo "<li><a>Bonjour ".$pseudouser."</a></li>";
            echo "<li><a href=\"index.php?profil=true&connexion=true&id=".$iduser."\">Profil</a></li>";
        };
        echo "<li><a href=\"index.php?community=true&id=".$iduser."\">Communauté</a></li>";
        echo "<li><a href=\"index.php?guide=true&id=".$iduser."\">Guide de création</a></li>";
        if (!empty($_SESSION['id'])) {
            echo "<li><a href=\"index.php?deconnexion=true&id=".$iduser."\">Se déconnecter</a></li>";
        }
        else {};
	?>
    </ul>
</nav>

<?php

require_once('include/extractions.php');
require_once('include/fonctions.php');
$pdo=connexion();

function runpage($page) {
    echo file_get_contents("$page");
}

function runprofil() {
    if (isset($_GET['id'])) {
        $pdo=connexion();
        $iduser=$_GET['id'];
    }
    require_once("action_profil.php");
}

if (isset($_GET['accueil'])) {
    runpage("action_accueil.php");
}

else if (isset($_GET['community'])) {
    require_once("action_community.php");
}
else if (isset($_GET['guide'])) {
    require_once("action_guide.php");
}
else if (isset($_GET['profil'])) {
    runprofil();
}
else if (isset($_GET['desincription'])) {
    runpage("action_accueil.php");
}
else if (isset($_GET['deconnexion'])) {
    require_once("include/fonction_deconnexion.php");
}
else if (isset($_GET['pageuser'])) {
	 if (isset($_GET['id'])) {
        $pdo=connexion();
        $iduser=$_GET['id'];
    }
    require_once("action_pageuser.php");
}

else {
    runpage("action_accueil.php");
}

if (isset($_GET['inscription'])) {
    echo ('<script>alert("Vous êtes désormais inscrit(e) ! Vous pouvez vous connecter. ");</script>');
};

if (isset($_GET['desinscription'])) {
    echo ('<script>alert("Vous êtes désormais désinscrit(e) !");</script>');
};

if (isset($_GET['errorconnexion'])) {
    echo ('<script>alert("Mauvais identifiant ou mauvais mot de passe !");</script>');
};

?>


</body>

</html>


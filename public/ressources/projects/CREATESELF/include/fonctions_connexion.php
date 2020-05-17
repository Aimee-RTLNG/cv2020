
<?php

  include('fonctions.php');
  include('config.php');
  $pdo = connexion();

  if(isset($_POST['pseudo'], $_POST['motdepasse'])) { // on regarde dans la base de donnée si cette valeur existe
    $pseudo = $_POST['pseudo'];
    $motdepasse = sha1($_POST['motdepasse']); //on encode le mot de passe en sha1

    if(!empty($pseudo) AND !empty($motdepasse)) { // le mot de passet et le pseudo doivent être remplis
      $req = $pdo->prepare('SELECT * FROM utilisateurs WHERE pseudo = :pseudo AND motdepasse = :motdepasse'); // on regarde si l'user existe
      $req->execute(array(
          'pseudo' => $pseudo,
          'motdepasse' => $motdepasse));
      $userexist = $req -> rowCount(); // on compte combien de lignes existent avec ces valeurs
      if($userexist == 1) { // si il y en a une
        $userinfo = $req -> fetch(); // alors on autorise la connexion
          session_start();
        $_SESSION['id'] = $userinfo['id'];
        $_SESSION['pseudo'] = $userinfo['pseudo'];
        header("Location: ../index.php?profil=true&connexion=true&id=".$_SESSION['id']); // retour à la page d'acceuil après connexion
      }
      else {
          header("Location: ../index.php?errorconnexion=true"); // retour à la page d'acceuil après mauvaise connexion
      }
    }
    else {
      echo "Il faut remplir tout les champs !";
    }
  }
  else {
    echo "Il faut remplir tout les champs !";
  }


?>

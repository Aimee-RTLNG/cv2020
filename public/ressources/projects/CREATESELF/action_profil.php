<head>
    <title>Votre profil</title>
</head>

<div>
    <?php
    require_once ('include/fonction_ajoutpage.php');

    $pdo=connexion();
    $iduser = $_GET['id'];
	
    if(!empty($iduser)) {
		echo("<div class=\"compte\"> <div class=\"profil\">");
        selectProfilUser($pdo, $iduser);
		echo("</div>")
	
	
		
    ?>

	
			<div id="id12 seepage" style="display: block;">
				<form method="post" id="choosepage" >
					<div class="container">
						<h1 class="innerstyle">Page affichée</h1>
							<div class="container">
								<select name="nompage">
									<?php affichePagesUser($pdo, $iduser); ?>
								</select>
							</div>
							<div class="choice">
								<input type="submit" name="choosepage" value="Voir la page" >
							</div>
					</div>
				</form>
			</div>
	
            <div class="boutonsajout">
                <button onclick="document.getElementById('id04').style.display='block'" style="width:auto; background-color:white">Ajouter une page</button>
                <button onclick="document.getElementById('id03').style.display='block'" style="width:auto; background-color:white">Ajouter du contenu</button>
                <button onclick="document.getElementById('id05').style.display='block'" style="width:auto; background-color:white">Ajouter un média</button>
				<button onclick="document.getElementById('id13').style.display='block'" style="width:auto; background-color:white">Ajouter une catégorie</button>
				<button onclick="document.getElementById('id06').style.display='block'" style="width:auto; background-color:white">Supprimer un contenu</button>
			</div>

            <div id="id03" class="modal ajoutcontenu">
                <form class="modal-content animate addcontent" action="include/fonction_ajoutcontenu.php?id=<?php echo $iduser ?>" method="post" id="addcontent">
                    <div class="container">
                        <h1 class="innerstyle">Ajouter un contenu</h1>
                        <label for "balise">Type de contenu </label>
                        <select name="balise" required>
                            <option value="p">Paragraphe</option>
                            <option value="h2">Titre principal</option>
                            <option value="h3">Titre secondaire</option>
                            <option value="blockquote">Citation</option>
                        </select>
                        <label for "theme">Theme du contenu</label>
                        <select name="theme" required>
                            <option value="clair">Clair</option>
                            <option value="sombre">Sombre</option>
                            <option value="neon-bleu">Neon Bleu</option>
                            <option value="neon-rose">Neon Rose</option>
                        </select>
                        <label for="texte">Contenu </label>
                        <textarea form="addcontent" name="texte" required></textarea>
                        <label for="classe">Style du contenu : </label>
                        <select name="classe" required>
                            <option value="basic">Basique</option>
                            <option value="italic">Italique</option>
                            <option value="bold">Gras</option>
                            <option value="underline">Souligné</option>
                        </select>
                        <label for="pageref">Page parente : </label>
                        <select name="pageref">
                            <?php affichePagesUser($pdo, $iduser); ?>
                        </select>
						<label for="categorie">Catégorie : </label>
                        <select name="categorie">
                            <?php afficheCategoriesUser($pdo, $iduser); ?>
                        </select>
                        <label for="ordre">Ordre du contenu : </label>
                        <input type="number" placeholder="Ordre de l'élement" name="ordre" required>
                    </div>
                    <div class="choice" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Annuler</button>
                        <input type="submit" name="ajoutcontenu" value="Ajouter le contenu" >
                    </div>
                </form>
            </div>

            <div id="id04" class="modal ajoutpage">
                <form class="modal-content animate" action="" method="post" name="postpage">
                    <div class="container">
                        <h1 class="innerstyle">Ajouter une page</h1>
                        <input type="text" placeholder="Nom de la page" name="titre" required>
                    </div>
                    <div class="choice" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Annuler</button>
                        <input type="submit" name="createpage" value="Créer la page">
                    </div>
                </form>
            </div>
			
			<div id="id13" class="modal ajoutcategorie">
                <form class="modal-content animate" action="" method="post" name="postcat">
                    <div class="container">
                        <h1 class="innerstyle">Ajouter une catégorie</h1>
                        <input type="text" placeholder="Nom de la catégorie" name="nom" required>
                    </div>
                    <div class="choice" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id13').style.display='none'" class="cancelbtn">Annuler</button>
                        <input type="submit" name="createpage" value="Créer la catégorie">
                    </div>
                </form>
            </div>
			
			<div id="id05" class="modal ajoutmedia">
                <form class="modal-content animate" action="include/fonction_ajoutmedia.php?id=<?php echo $iduser ?>" method="post" id="addmedia">
                    <div class="container">
                        <h1 class="innerstyle">Ajouter un média</h1>
                        <label for "balise">Type de média </label>
                        <select name="balise" required>
                            <option value="img">Image</option>
                            <option value="iframe">Vidéo</option>
                        </select>
                        <label for "theme">Theme du contenu</label>
                        <select name="theme" required>
                            <option value="media">Image</option>
                            <option value="media">Vidéo</option>
                        </select>
                        <label for="texte">Url du média </label>
                        <textarea form="addmedia" name="texte" style="height: 50px;" placeholder="Pour ajouter une vidéo, remplacer dans l'url le 'watch?v=' par 'embed/'" required></textarea>
                        <label for="classe">Taille du média : </label>
                        <select name="classe" required>
                            <option value="little-media">Taille réduite</option>
                            <option value="medium-media">Taille moyenne</option>
                            <option value="large-media">Taille large</option>
                        </select>
                        <label for="pageref">Page parente : </label>
                        <select name="pageref">
                            <?php affichePagesUser($pdo, $iduser); ?>
                        </select>
						<label for="categorie">Catégorie : </label>
                        <select name="categorie">
                            <?php afficheCategoriesUser($pdo, $iduser); ?>
                        </select>
                        <label for="ordre">Ordre du contenu : </label>
                        <input type="number" placeholder="Ordre de l'élement" name="ordre" required>
                    </div>

                    <div class="choice" style="background-color:#f1f1f1;">
                        <button type="button" onclick="document.getElementById('id05').style.display='none'" class="cancelbtn">Annuler</button>
                        <input type="submit" name="addmedia" value="Ajouter le média" >
                    </div>
                </form>
            </div>
			
			<div id="id06" class="modal deletecontent">
                <form class="modal-content animate" action="include/fonction_deletecontent.php?id=<?php echo $iduser ?>" method="post" id="deletecontent">
                    <div class="container">
                        <h1 class="innerstyle">Supprimer un contenu</h1>
                        <label for="contenuref">Contenu : </label>
                        <select name="contenuref">
                            <?php selectListeContenu($pdo, $iduser); ?>
                        </select>
                    </div>
                    <div class="choice" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id06').style.display='none'" class="cancelbtn">Annuler</button>
                        <input type="submit" name="deletecontent" value="Supprimer le contenu" >
                    </div>
                </form>
            </div>
			
			<?php
			
				if (isset($_POST['titre'])) {
					$titrepage=$_POST['titre'];
					ajoutPage($pdo, $titrepage, $iduser);
					echo "<meta http-equiv=\"refresh\" content=\"0\">";
				}
				if (isset($_POST['nom'])) {
					$contenu=$_POST['nom'];
					ajoutCategorie($pdo, $contenu, $iduser);
					echo "<meta http-equiv=\"refresh\" content=\"0\">";
				}
			echo ("</div>");
			
			?>			
			<div class="categories">
				<p> Catégories :</p>
				<?php afficheTags($pdo, $iduser); ?>
			</div>
			<?php 
			
				if (isset($_POST['choosepage'])) {
		if (!empty($_POST['nompage'])) {
		    $idpage=$_POST['nompage'];
		    echo "<h2 style=\"text-align:center;\">Voici la page ";
            NomPagesSelected($pdo, $iduser, $idpage);
            echo " </h2>";
            echo ("<div class=\"contenuuser\">");
		    ContenuPagesSelected($pdo, $iduser, $idpage);
			echo("</div>");
            echo("<div class=\"addandseeavis\"><h2 style=\"text-align:center;\">Voici les avis sur la page :</h2>");
			AvisPagesSelected($pdo, $idpage);
            echo("</div>");
            ?>
            <script> document.getElementById('id11').style.display='block'; </script>
             <?php
		}
		else {		
			$idpage="";
	    }
		
	};

			}
	else {
		?>
		<div style="margin: 50px; text-align: center;"><h1>Il faut être connecté pour avoir accès à son profil.</h1></div>
		<div style="display: flex; align-items: center; justify-content: center;">
			<div class="account" >
				<img src="uploads/account.svg" style="height:150px; padding:20px;">
				<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; background-color:white">Compte</button>
			</div>
            <div id="id01" class="modal">
                <form class="modal-content animate" action="include/fonctions_connexion.php" method="post">
                    <div class="container">
                        <h1 class="innerstyle">Connexion</h1>
                        <input type="text"  name="pseudo" placeholder="Pseudo" required>
                        <input type="password" name="motdepasse" placeholder="Mot de passe" required>
                    </div>

                    <div class="choice">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button>
                        <button type="button" onclick="document.getElementById('id02').style.display='block'; document.getElementById('id01').style.display='none';" style="background-color:grey">S'inscrire</button>
                        <input type="submit" name="connexion" value="Se connecter"></input>
                    </div>
                </form>
            </div>

            <div id="id02" class="modal">
                <form class="modal-content animate" action="include/fonction_inscription.php" method="post">

                    <div class="container">
                        <h1 class="innerstyle">S'inscrire</h1>
                        <!--<input type="file" name="avatar" id="file" class="inputfile" required/>
                        <label for="file" class="avatar" >📎 Choisir son avatar</label>-->
                        <input type="text" placeholder="Nom" name="nom" required>
                        <input type="text" placeholder="Prénom" name="prenom" required>
                        <input type="email" placeholder="E-mail" name="email" required>
                        <input type="text" placeholder="Pseudo" name="pseudo" required>
                        <input type="password" placeholder="Mot de passe" name="motdepasse" required>
                    </div>

                    <div class="choice">
                        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Annuler</button>
                        <button type="button" onclick="document.getElementById('id01').style.display='block'; document.getElementById('id02').style.display='none';" style="background-color:grey">Se connecter</button>
                        <input type="submit" name="inscription" value="S'inscrire"></input>
                    </div>
                </form>
            </div>
		</div>
		<?php 
	} 

?>
			
</div>


<main>

    <div class="body">
        <div class="introduction">
            <p class="introduction">
                Bienvenue sur Create Self, le système de gestion de contenu gratuit le plus approximatif de tout le cyberespace!
            </p>
            <p class="introduction">
                Grâce à Create Self, vous pouvez insérer du contenu et personnaliser sa mise en forme pour y ajouter du caractère et lui ajouter de l'impact. Fini les mises en pages fantaisistes, à vous de créer !
            </p>
            <p class="introduction">
                Create Self est un système de gestion de contenu ou SGC (content management system ou CMS en anglais) destiné à la conception et à la mise à jour dynamique de sites Web ou d'applications multimédia. Le contenu est stocké le plus souvent dans une base de données, structurée en tables et en champs. C'est le contenu des champs de la base qui est créé/modifié par le rédacteur, et non pas la page elle-même. On parle de site « dynamique ».
            </p>
            <p class="introduction">
                Vous pouvez desormais vous inscrire et vous connecter pour commencer à personnaliser votre contenu!
            </p>
        </div>

        <div class="account">

            <?php

            require_once('include/fonctions.php');
            require_once('include/config.php');
            $pdo = connexion();

            ?>

            <img src="uploads/account.svg" style="height:150px; padding:20px;">
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; background-color:white">Compte</button>

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
</main>

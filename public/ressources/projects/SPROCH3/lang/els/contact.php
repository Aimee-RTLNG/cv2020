<!DOCTYPE html>
<html>


  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
    <title>Sprochrenner</title>
	<link rel="stylesheet" href="style/contact.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  </head>
  
  
  <body>
  
	<header>
		<nav>	
			<div><a>ACCUEIL</a></div>
			<div><a>INFORMATIONS</a><i class="fas fa-angle-down fa-lg" alt="Menu déroulant"></i></div>
			<div class="dropdown infos hidden">
				<div><a>Qu'est ce que c'est ?</a></div>
				<div><a>Qui organise ?</a></div>
				<div><a>Parcours</a></div>
			</div>
			<div><a>PARTICIPER</a><i class="fas fa-angle-down fa-lg" alt="Menu déroulant"></i></div>
			<div class="dropdown participer hidden">
				<div><a>Acheter des kilomètres</a></div>
				<div><a>Préparer sa course</a></div>
				<div><a>Devenir bénévole</a></div>
				<div><a>Parcours</a></div>
			</div>
			<div><a>ÉVÊNEMENTS</a></div>
			<div class="dropdown events hidden">
				<div><a>Actualités</a></div>
				<div><a>Fêtes</a></div>
				<div><a>Projets</a></div>
			</div>
			<div><a>CONTACT</a></div>
		</nav>
		<div class="mini">
			<i class="fas fa-bars"></i>
		</div>
		<div class="flags">
				<img src="uploads/images/flags/round-fr.png" class="flag fr" alt="Drapeau français">
				<img src="uploads/images/flags/round-ger.png" class="flag ger" alt="Drapeau allemand">
				<img src="uploads/images/flags/round-el.png" class="flag el" alt="Drapeau alsacien">
		</div>
	</header>
	
	<main>
		<div class="search">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Rechercher...">
        </div>
        <div class="formcontact">
            <h1>NOUS CONTACTER</h1>
            <p>
                Une question, une suggestion, une requête ? Posez nous votre question ici, nous vous répondrons au plus vite!
            </p>
            <form action="" method="post">
               <div>
                    <label for="name">Nom : </label>
                    <input type="text" id="name" name="user_name">
                </div>
                <div>
                    <label for="mail">E-mail : </label>
                   <input type="email" id="mail" name="user_mail">
                </div>
                <div>
                    <label for="msg">Message : </label>
                    <textarea id="msg" name="user_message"></textarea>
                </div>
                <div class="button">
                    <button type="submit">Envoyer le message</button>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <div class="footer1">
			<h2>Sprochrenner</h2>
			<p>La première course de relais pour l'Alsace</p>
		</div>
		<div class="footer2">
			<h2>Contact</h2>
			<p>Téléphone : 00 11 22 33 44</p>
			<p>E-mail : sprochrenner@mail.fr</p>
		</div>
    </footer>
  </body>
</html>
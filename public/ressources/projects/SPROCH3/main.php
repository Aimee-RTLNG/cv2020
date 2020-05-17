<!DOCTYPE html>
<html>


  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
    <title>Sprochrenner</title>
	<link rel="stylesheet" href="style/main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  </head>
  
  
  <body>
  
	<header>
		<nav>	
			<div ><a href="main.php" class="current">ACCUEIL</a></div>
			<button onclick="downmenu1(this)" class="dropbtn"><a>INFORMATIONS</a><i class="fas fa-angle-down fa-lg" alt="Menu déroulant"></i></button>
			<div class="dropdown infos hidden">
				<div><a>Qu'est ce que c'est ?</a></div>
				<div><a>Qui organise ?</a></div>
				<div><a href="parcours.php">Parcours</a></div>
			</div>
			<button onclick="downmenu2(this)" class="dropbtn"><a>PARTICIPER</a><i class="fas fa-angle-down fa-lg" alt="Menu déroulant"></i></button>
			<div class="dropdown participer hidden">
				<div><a>Acheter des kilomètres</a></div>
				<div><a href="preparercourse.php">Préparer sa course</a></div>
				<div><a>Devenir bénévole</a></div>
				<div><a href="parcours.php">Parcours</a></div>
			</div>
			<button onclick="downmenu3(this)" class="dropbtn"><a>ÉVÊNEMENTS</a><i class="fas fa-angle-down fa-lg" alt="Menu déroulant"></i></button>
			<div class="dropdown events hidden">
				<div><a href="actu.php">Actualités</a></div>
				<div><a>Fêtes</a></div>
				<div><a>Projets</a></div>
				<div><a href="events.php">Évênements</a></div>
			</div>
			<div><a href="contact.php">CONTACT</a></div>
		</nav>
		<div class="mini">
		<button onclick="downmenu4(this)" class="dropbtn mini"><i class="fas fa-bars"></i></button>
			<div class="minimenu hidden">
			<div><a href="main.php" class="current">ACCUEIL</a></div>
			<div><a>INFORMATIONS</a>
				<p><a>Qu'est ce que c'est ?</a></p>
				<p><a>Qui organise ?</a></p>
				<p><a href="parcours.php">Parcours</a></p>
			</div><div>	
			<a>PARTICIPER</a>
				<p><a>Acheter des kilomètres</a></p>
				<p><a href="preparercourse.php">Préparer sa course</a></p>
				<p><a>Devenir bénévole</a></p>
				<p><a href="parcours.php">Parcours</a></p>
			</div><div>	
			<a>ÉVÊNEMENTS</a>
				<p><a href="actu.php">Actualités</a></p>
				<p><a>Fêtes</a></p>
				<p><a>Projets</a></p>
				<p><a href="events.php">Évênements</a></p>
			</div>
			<div><a href="contact.php">CONTACT</a></div>
			</div>
		</div>	
		<div class="flags">
				<img src="uploads/images/flags/round-fr.png" class="flag fr shadow" alt="Drapeau français">
				<img src="uploads/images/flags/round-ger.png" class="flag ger shadow" alt="Drapeau allemand">
				<img src="uploads/images/flags/round-el.png" class="flag el shadow" alt="Drapeau alsacien">
		</div>
	</header>
	
	<main>


        <div class="part1">
            <div class="search">
                <i class="fas fa-search"></i>
				<form method="GET">
                <input type="text">
				</form>
            </div>
                <div class="title">
                    <h1>REJOIGNEZ LA COURSE</h1>
                    <p>La première course de relais pour la langue régionale d'Alsace, qui supporte son patrimoine, sa culture et son territoire.</p>
                </div>
                <img class="logo" src="uploads/images/logo/Logo.png">
            </div>
		<a href="#part2"><img class="redarrow shadow" src="uploads/images/redarrow.png"></a>
		</div>
		

        <div class="part2" id="part2">
            <div class="text">
				<h2>
				La première course de relais pour la Langue régionale d’Alsace
				</h2>
				<p>
				« Sprochrenner » ; c’est le nom de notre « Redadeg alsacienne » ; notre Course de relais pour la langue régionale d’Alsace! Constituée en association de droit local Alsace-Moselle, « Sprochrenner » est une association toute récente créée en mai 2018. La première « Sprochrenner » est prévue sur le week-end de la Pentecôte 2020, soit du samedi 30 mai au lundi 1er juin 2020. Elle traversera l’Alsace du Sud au Nord, de jour comme de nuit, sur près de 340 kilomètres. Dans cette course de relais à travers l’Alsace, recevoir, porter le témoin et le transmettre cristallise le sens de la course ; celui du symbole de l’héritage reçu, de l’hommage rendu et que l’on transmet vers l’avenir en reconnaissance de ce que l’Alsace nous porte à vivre ensemble.
				</p>
				<div class="compteur">
					<div><p class='number'>3</p><a class="name">JOURS</a></div>
					<div><p class="number">270</p><a class="name">COUREURS</a></div>
					<div><p class="number">340</p><a class="name">KILOMETRES</a></div>
				</div>
            </div>
            <div class="map">
				<a class="saverne">Saverne</a>
				<a class="strasbourg">Strasbourg</a>
				<a class="selestat">Sélestat</a>
				<a class="colmar">Colmar</a>
				<a class="mulhouse">Mulhouse</a>
            </div>
		</div>
		<div class="more" >
                <a href="parcours.php" class="knowmore">EN SAVOIR PLUS</a>
		</div>
		

		<div class="part3">
			<div class="participer">
				<h2>PARTICIPER</h2>
				<p>Vous avez la possibilité de participer à la course avec nous ! Il n'y a pas d'obligations ni de règles de participation. Nous avons rédigé une petite liste de choses à prévoir pour que vous puissiez courir dans les meilleures conditions.
				<br><a href="preparercourse.php">COURIR AVEC NOUS</a>
				</p>
			</div>

			<div class="sponsoriser left">
				<h2>SPONSORISER</h2>
				<p>Si vous possédez une société ou une association, nous vous proposons de la mettre en avant ! En effet, en achetant les kilomètres souhaités au nom de votre compagnie, celle-ci profitera d'une visibilité assurée pendant la course !
				<br><a>ACHETER DES KMS</a>
				</p>
			</div>

			<div class="bénévolat">
				<h2>BÉNÉVOLAT</h2>
				<p>L'organisation et/ou le déroulement de la course Sprochrenner vous intéresse et vous souhaitez y apporter votre contribution personnelle ? Nous sommes ravis de pouvoir vous accueillir en tant que bénévoles pour tout cela, merci ! 
				<br><a href="">DEVENIR BÉNÉVOLE</a>
				</p>
			</div>

			<div class="presse left">
				<h2>PRESSE</h2>
				<p>Journalistes, bloggeurs, vidéastes : nous mettons à votre disposition un kit pour vous permettre d'obtenir toutes les informations nécessaires sur la course. Il vous permettra de parler de l'évènement dans les moindres détails.
				<br><a href="">LIRE LE KIT PRESSE</a>
				</p>
			</div>

		</div>

	<div class="footer">
		<div class="infos">
			<div class="titre">
				<h3>Sprochrenner</h3>
				<p>La première course de relais pour l'Alsace</p>
			</div>
			<div class="contact">
				<h3>Contact</h3>
				<p>Téléphone : 00 11 22 33 44</p>
				<p>E-mail: sprochrenner@mail.fr</p>
			</div>	
		</div>
		<div class="menu">
			<div class="current"><h4>ACCUEIL</h4></div>
			<div>
				<h4>INFORMATIONS</h4>
				<p>Qu'est ce que c'est</p>
				<p>Qui organise ? </p>
				<p>Parcours</p>
			</div>
			<div>
				<h4>PARTICIPER</h4>
				<p>Acheter des kilomètres</p>
				<p>Préparer sa course</p>
				<p>Devenir bénévole</p>
			</div>
			<div>
				<h4>EVENEMENTS</h4>
				<p>Actualités</p>
				<p>Fêtes</p>
				<p>Projets</p>
			</div>
			<div><h4>CONTACT</h4></div>
		</div>
		<div class="sponsors">
			<img class="sponsor" src="uploads/images/sponsor.png">
			<img class="sponsor" src="uploads/images/sponsor.png">
			<img class="sponsor" src="uploads/images/sponsor.png">
			<p>Télécharger le kit presse</p>
			<img class="sponsor" src="uploads/images/sponsor.png">
			<img class="sponsor" src="uploads/images/sponsor.png">
			<img class="sponsor" src="uploads/images/sponsor.png">
		</div>
		<div class="mentions">
			<p>Mentions légales</p>
		</div>
	</div>

	</main>

	<script src="js/main.js"></script>

  </body>
</html>
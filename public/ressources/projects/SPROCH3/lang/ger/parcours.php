<!DOCTYPE html>
<html>


  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
    <title>Sprochrenner</title>
	<link rel="stylesheet" href="style/parcours.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  </head>
  
  
  <body>
  
	<header>
		<nav>	
			<div ><a href="main.php">ACCUEIL</a></div>
			<button onclick="downmenu1(this)" class="dropbtn"><a  class="current">INFORMATIONS</a><i class="fas fa-angle-down fa-lg" alt="Menu déroulant"></i></button>
			<div class="dropdown infos hidden">
				<div><a>Qu'est ce que c'est ?</a></div>
				<div><a>Qui organise ?</a></div>
				<div><a href="parcours.php"  class="current">Parcours</a></div>
			</div>
			<button onclick="downmenu2(this)" class="dropbtn"><a >PARTICIPER</a><i class="fas fa-angle-down fa-lg" alt="Menu déroulant"></i></button>
			<div class="dropdown participer hidden">
				<div><a>Acheter des kilomètres</a></div>
				<div><a href="preparercourse.php">Préparer sa course</a></div>
				<div><a>Devenir bénévole</a></div>
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
			<div class="dropdown minimenu hidden">
			<p>ACCUEIL</p>
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
				<p>Parcours</p>
			</div>
			<div>
				<h4>EVENEMENTS</h4>
				<p>Actualités</p>
				<p>Fêtes</p>
				<p>Projets</p>
			</div>
			<p>CONTACT</p>
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
            <div class="titre">
                <h1>DÉCOUVRIR LE PARCOURS</h1>
                <p>Participer à la Sprochrenner, ce n’est pas simplement courir : c’est traverser un territoire rempli d’histoire et de vie. C’est voir des montagnes, des plaines, des monuments, des gens. Préparez vous à en prendre plein la vue en découvrant la carte du parcours de la première course de relais pour l’Alsace.</p>
            </div>
            <div class="mapicon">
                <div class="fond"></div>
                <a href="#map">
                    <img class="top" src="uploads/images/map.png">
                    <p class="top" >VOIR LA CARTE </p>
                </a>
            </div>
        </div>


        <div class="part2" id="map">
            <div class="map">
				<div class="ville saverne">
                    <a><p>Saverne</p>
                        <p><i>Passage le long du canal de la Marne-au-Rhin ainsi que sur le parcours EuroVelo.</i></p>
                    </a>
                </div><div class="ville strasbourg">
                    <a><p>Strasbourg</p>
                        <p><i>Passage dans le centre ville mythique de la ville, avec sa cathédrale et ses habitations.</i></p>
                    </a>
                </div><div class="ville selestat">
                    <a><p>Séléstat</p>
                        <p><i>Passage près de la célèbre route des vins d'Alsace ainsi que du château du Haut-Koenigsbourg.</i></p>
                    </a>
                </div><div class="ville colmar">
                    <a><p>Colmar</p>
                        <p><i>Passage près de la Collégiale Saint-Martin ainsi que le quartier des Tanneurs.</i></p>
                    </a>
                </div><div class="ville mulhouse">
                    <a><p>Mulhouse</p>
                        <p><i>Passage dans le centre ville devant la mairie ainsi que par les lieux cultes de la ville.</i></p>
                    </a>
                </div>
            </div>
            <div class="anims">
                <img src="uploads/images/perso4.png">
                <div>
                    <div class="title"><h2>Les animations</h2><a href="">En savoir plus</a></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
		</div>

    <div class="part3">
        <svg height="15" width="100%">
                <line x1="0" y1="0" x2="5%" y2="0" style="stroke:rgba(0,0,0,0.2);stroke-width:20" />
                <line x1="5%" y1="0" x2="5.5%" y2="0" style="stroke:rgba(0,0,0,1);stroke-width:35" />
                <line x1="5.5%" y1="0" x2="12%" y2="0" style="stroke:rgba(0,0,0,0.2);stroke-width:20" />
                <line x1="12%" y1="0" x2="20%" y2="0" style="stroke:rgba(246, 201, 23, 1);stroke-width:20" />
                <line x1="20%" y1="0" x2="20.5%" y2="0" style="stroke:rgba(0,0,0,1);stroke-width:35" />
                <line x1="20.5%" y1="0" x2="35%" y2="0" style="stroke: rgba(246, 201, 23, 1);;stroke-width:20" />
                <line x1="35%" y1="0" x2="35.5%" y2="0" style="stroke:rgba(0,0,0,1);stroke-width:35" />
                <line x1="35.5%" y1="0" x2="50%" y2="0" style="stroke:rgba(0,0,0,0.2);stroke-width:20" />
                <line x1="50%" y1="0" x2="50.5%" y2="0" style="stroke:rgba(0,0,0,1);stroke-width:35" />
                <line x1="50.5%" y1="0" x2="55%" y2="0" style="stroke: rgba(246, 201, 23, 1);;stroke-width:20" />
                <line x1="55%" y1="0" x2="65%" y2="0" style="stroke:rgba(0,0,0,0.2);stroke-width:20" />
                <line x1="65%" y1="0" x2="65.5%" y2="0" style="stroke:rgba(0,0,0,1);stroke-width:35" />
                <line x1="65.5%" y1="0" x2="80%" y2="0" style="stroke: rgba(246, 201, 23, 1);;stroke-width:20" />
                <line x1="80%" y1="0" x2="80.5%" y2="0" style="stroke:rgba(0,0,0,1);stroke-width:35" />
                <line x1="80.5%" y1="0" x2="85%" y2="0" style="stroke: rgba(0, 0, 0, 0.2);;stroke-width:20" />
                <line x1="85%" y1="0" x2="95%" y2="0" style="stroke: rgba(246, 201, 23, 1);;stroke-width:20" />
                <line x1="95%" y1="0" x2="95.5%" y2="0" style="stroke:rgba(0,0,0,1);stroke-width:35" />
                <line x1="95.5%" y1="0" x2="100%" y2="0" style="stroke:rgba(0,0,0,0.2);stroke-width:20" />
                Désolé, il n'est pas possible de voir la frise sur votre navigateur.
            </svg>
        <div class="kiloms">
            <div>
                <p>Strasbourg</p>
                <p>0</p>
            </div><div>
                <p>Haguenau</p>
                <p>50</p>
            </div><div>
                <p>Saverne</p>
                <p>110</p>
            </div><div>
                <p>Selestat</p>
                <p>180</p>
            </div><div>
                <p>Colmar</p>
                <p>225</p>
            </div><div>
                <p>Guebwiller</p>
                <p>300</p>
            </div><div>
                <p>Mulhouse</p>
                <p>340</p>
            </div>
        </div>
    </div>
    <div class="compteur">
        <div>
            <h2>122 kilomètres achetés</h2>
            <h2>210 kilomètres restants</h2>
        </div>
        <div class="more" >
            <a href="" class="knowmore">ACHETER DES KILOMETRES</a>
		</div>
    </div>

    <div class="part4">
        <div class="participer">
			<h2>PARTICIPER</h2>
			<p>Vous avez la possibilité de participer à la course avec nous ! Il n'y a pas d'obligations ni de règles de participation. Nous avons rédigé une petite liste de choses à prévoir pour que vous puissiez courir dans les meilleures conditions.
			<br><a href="preparercourse.php">COURIR AVEC NOUS</a>
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
			<div><h4>ACCUEIL</h4></div>
			<div>
				<h4>INFORMATIONS</h4>
				<p>Qu'est ce que c'est</p>
				<p>Qui organise ? </p>
				<p class="current">Parcours</p>
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
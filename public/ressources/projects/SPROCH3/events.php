<!DOCTYPE html>
<html>


  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
    <title>Sprochrenner</title>
	<link rel="stylesheet" href="style/events.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  </head>
  
  
  <body>
  
	<header>
		<nav>	
			<div><a href="main.php">ACCUEIL</a></div>
			<button onclick="downmenu1(this)" class="dropbtn"><a>INFORMATIONS</a><i class="fas fa-angle-down fa-lg" alt="Menu déroulant"></i></button>
			<div class="dropdown infos hidden" id="dropdown">
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
			<button onclick="dropmenu3(this)" class="dropbtn"><a>ÉVÉNEMENTS</a><i class="fas fa-angle-down fa-lg" alt="Menu déroulant"></i></button>
			<div class="dropdown events hidden">
				<div><a href="actu.php">Actualités</a></div>
				<div><a>Fêtes</a></div>
				<div><a>Projets</a></div>
				<div><a href="events.php">Événements</a></div>
			</div>
			<div><a href="contact.php">CONTACT</a></div>
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
        <div class="part1">
            <div class="search">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Rechercher...">
            </div>
            <div class="titre">
                <h1>ÉVÉNEMENTS</h1>
                <img class="logo" src="uploads/images/calendar.png" alt="calendrier"/>
            </div>
        </div>
        <div class="part2">
			<div class="boxevent">
				<div class="dateshare">
					<div class="date">
						<p>01/05/2018</p>
					</div>
					<div class="share">
					<a><img src="uploads/images/share.png" alt="partager" class="sharebutton"/></a>
					</div>
				</div>
            	<div class="evenement">
					<h3>Un événement</h3>
					<p>Illud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solitarum rerum cibos iam consumendo inediae propinquantis aerumnas exitialis horrebant. Illud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen,
					</p>
            	</div>
				<div class="ecart1">
				</div>
			</div>
            <div class="boxevent">
			<div class="dateshare">
					<div class="date">
						<p>01/06/2018</p>
					</div>
					<div class="share">
					<a><img src="uploads/images/share.png" alt="partager" class="sharebutton"/></a>
					</div>
				</div>
            	<div class="evenement">
					<h3>Un événement</h3>
					<p>Illud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solitarum rerum cibos iam consumendo inediae propinquantis aerumnas exitialis horrebant. Illud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen,
					</p>
            	</div>
				<div class="ecart1">
				</div>
            </div>
            <div class="boxevent">
			<div class="dateshare">
					<div class="date">
						<p>01/07/2018</p>
					</div>
					<div class="share">
					<a><img src="uploads/images/share.png" alt="partager" class="sharebutton"/></a>
					</div>
				</div>
            	<div class="evenement">
					<h3>Un événement</h3>
					<p>Illud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solitarum rerum cibos iam consumendo inediae propinquantis aerumnas exitialis horrebant. Illud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen,
					</p>
            	</div>
				<div class="ecart1">
				</div>
            </div>
        </div>
		<div class="part3">
			<img src="uploads/images/perso1.png" class="personnage1" alt="personnage"/>
		</div>
		<div class="part4">
			<div class="boxevent">
				<div class="dateshare">
					<div class="date">
						<p>01/05/2018</p>
					</div>
					<div class="share">
					<a><img src="uploads/images/share.png" alt="partager" class="sharebutton"/></a>
					</div>
				</div>
            	<div class="evenement">
					<h3>Un événement</h3>
					<p>Illud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solitarum rerum cibos iam consumendo inediae propinquantis aerumnas exitialis horrebant. Illud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen,
					</p>
            	</div>
				<div class="ecart1">
				</div>
			</div>
            <div class="boxevent">
			<div class="dateshare">
					<div class="date">
						<p>01/06/2018</p>
					</div>
					<div class="share">
					<a><img src="uploads/images/share.png" alt="partager" class="sharebutton"/></a>
					</div>
				</div>
            	<div class="evenement">
					<h3>Un événement</h3>
					<p>Illud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solitarum rerum cibos iam consumendo inediae propinquantis aerumnas exitialis horrebant. Illud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen,
					</p>
            	</div>
				<div class="ecart1">
				</div>
            </div>
            <div class="boxevent">
			<div class="dateshare">
					<div class="date">
						<p>01/07/2018</p>
					</div>
					<div class="share">
					<a><img src="uploads/images/share.png" alt="partager" class="sharebutton"/></a>
					</div>
				</div>
            	<div class="evenement">
					<h3>Un événement</h3>
					<p>Illud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solitarum rerum cibos iam consumendo inediae propinquantis aerumnas exitialis horrebant. Illud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen,
					</p>
            	</div>
				<div class="ecart1">
				</div>
            </div>
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
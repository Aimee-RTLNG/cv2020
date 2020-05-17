<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Sprochrenner</title>
    <link rel="stylesheet" href="style/actu.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>


<body>

<header>
    <nav>
        <div ><a href="main.php">ACCUEIL</a></div>
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
        <button onclick="downmenu3(this)" class="dropbtn"><a  class="current">ÉVÊNEMENTS</a><i class="fas fa-angle-down fa-lg" alt="Menu déroulant"></i></button>
        <div class="dropdown events hidden">
            <div><a href="actu.php"  class="current">Actualités</a></div>
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
            </div>
            <div>
                <h4>EVENEMENTS</h4>
                <p  class="current">Actualités</p>
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
            <h1>ACTUALITÉS</h1>
        </div>
    </div>

    <div class="part2">
        <div class="timeline">
            <section class="timeline-item">
                <a href="#" class="timeline-item-details">
                    <time datetime="2016-11-07" class="timeline-item-details-date">05 / 10 / 2018</time>
                    <div class="timeline-item-details-marker"></div>
                    <div class="timeline-item-details-description">
                        <h2>Entrainement d'initiation à la course de relais dans les collèges d'Alsace</h2>
                        <p>Erat autem diritatis eius hoc quoque indicium nec obscurum nec latens, quod ludicris cruentis delectabatur et in circo sex vel septem aliquotiens vetitis certaminibus pugilum vicissim se concidentium perfusorumque sanguine specie ut lucratus ingentia laetabatur</p>
                        <p>Oratio haec ea quamobrem contigerit peregrinos posse propria deflexerit monstranda quosdam deflexerit quosdam sponte propria perstringam ea causas oratio lecturos propria sponte ad ad oratio ad similis narratur ea seditiones ea et gererentur perstringam posse quoniam forsitan a lecturos nihil.</p>
                    </div>
                    <img src="uploads/images/article1.png">
                </a>
            </section>

            <section class="timeline-item">
                <a href="#" class="timeline-item-details">
                    <time datetime="2016-11-07" class="timeline-item-details-date">12 / 10 / 2018</time>
                    <div class="timeline-item-details-marker"></div>
                    <div class="timeline-item-details-description">
                        <div>
                            <h2>Ouverture du jardin du château d'Alsace à la course Sprochrenner</h2>
                            <p>Erat autem diritatis eius hoc quoque indicium nec obscurum nec latens, quod ludicris cruentis delectabatur et in circo sex vel septem aliquotiens vetitis certaminibus pugilum vicissim se concidentium perfusorumque sanguine specie ut lucratus ingentia laetabatur</p>
                            <p>Oratio haec ea quamobrem contigerit peregrinos posse propria deflexerit monstranda quosdam deflexerit quosdam sponte propria perstringam ea causas oratio.</p>
                        </div>
                    </div>
                    <img src="uploads/images/article2.png">
                </a>
            </section>

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
                <p  class="current">Actualités</p>
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
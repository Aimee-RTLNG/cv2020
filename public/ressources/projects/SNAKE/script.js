var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");

function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}

// --------------------------------------------------- Classe Anneau

function Anneau(i,j, color) {
	this.i = i;
	this.j = j;
	this.color = color;
}

Anneau.prototype.positionne = function() {
	ctx.fillStyle = this.color;
	ctx.fillRect(this.i * 20, this. j * 20,20,20);
}

Anneau.prototype.deplace = function(dir){
	if(dir==0){ // vers le haut
		if(this.j ==0) {
			this.j = 19;
		}
		else {this.j--;}
	}
	else if (dir==1) { // vers la droite
		if(this.i ==19) {
			this.i = 0;
		}
		else {this.i++;}
	}
	else if (dir==2) { // vers le bas
		if(this.j ==19) {
			this.j = 0;
		}
		else {this.j++;}
	}
	else if (dir==3) { // vers la gauche
		if(this.i ==0) {
			this.i = 19;
		}
		else {this.i--;}
	}
}

Anneau.prototype.deplaceSwitch = function(dir) {
	switch(dir) {
		// haut
		case 0: this.j-- ; if (this.j < 0) this.j = 19; break;
		// droite
		case 1: this.i++ ; if (this.i > 19) this.i = 0; break;
		// bas
		case 2: this.j++ ; if (this.j > 19) this.j = 0; break;
		// gauche
		case 3: this.i-- ; if (this.i < 0) this.i = 19; break;
	}
}


Anneau.prototype.copier = function(anneau) {
	this.i = anneau.i;
	this.j = anneau.j;
}

// --------------------------------------------------- Classe serpent

function Serpent(longueur, i, j, dir) {
	// longueur du serpent
	this.longueur = longueur;
	// direction initiale
	this.dir = dir;
	this.anneaux= [];
	// création de l'anneau de tête
	var tete = new Anneau(i,j, 'rgb(0,56,64)');
	this.anneaux.push(tete);
	// création des anneaux du reste du corps
	for (var l = 1; l < longueur; l++) {
		var anneau = new Anneau (i-l, j , 'rgb(0,'+(56+6*l)+','+(64+2*l)+')');
		this.anneaux.push(anneau);
	}
	// Création de l'anneau de queue
}

Serpent.prototype.positionne = function() {
	for(var l = 0; l < this.longueur; l++) {
		this.anneaux[l].positionne();
	}
}

Serpent.prototype.first = function(fruit) {
	var Tx = this.anneaux[0]["i"];
	var Ty = this.anneaux[0]["j"];
	var Fx = fruit.posX/20;
	var Fy = fruit.posY/20;
	if(Tx==Fx && Ty == Fy) {
		f.regen();
		s.allonge();
	}
}

Serpent.prototype.deplace = function() {
		// On déplace les anneaux qui précèdent la tête
		for (var l =1; l < this.longueur; l++) {
			this.anneaux[this.longueur - l].copier(this.anneaux[this.longueur-l-1]);
		}
		// On déplace la tête
		this.anneaux[0].deplace(this.dir);
	}

Serpent.prototype.allonge = function(){
	var queue=this.anneaux[this.longueur - 1];
	queue.color = 'rgb(0,'+(56+6*this.longueur)+','+(64+2*this.longueur)+')';
	var avantDernier = this.anneaux[this.longueur - 2];
	if (avantDernier.i != queue.i - 1)
	{
		// On crée la nouvelle queue à gauche de l'ancienne
		var nouvelleQueue = new Anneau(queue.i - 1, queue.j, 'rgba(0,0,0,0)' );
		this.longueur++;
		this.anneaux.push(nouvelleQueue);
	}
	else if (avantDernier.i == queue.i + 1 ) {
		// On crée la nouvelle queue à droite de l'ancienne
		var nouvelleQueue = new Anneau(queue.i + 1, queue.j, 'rgba(0,0,0,0)' );
		this.longueur++;
		this.anneaux.push(nouvelleQueue);

	}
	else if (avantDernier.j == queue.j + 1)
	{
		// On crée la nouvelle queue en bas de l'ancienne
		var nouvelleQueue = new Anneau(queue.i, queue.j + 1, 'rgba(0,0,0,0)' );
		this.longueur++;
		this.anneaux.push(nouvelleQueue);

	}
	else if (avantDernier.j != queue.j - 1)
	{
		// On crée la nouvelle queue en haut de l'ancienne
		var nouvelleQueue = new Anneau(queue.i, queue.j - 1, 'rgba(0,0,0,0)' );
		this.longueur++;
		this.anneaux.push(nouvelleQueue);
	}
}

Serpent.prototype.changeDirection = function(dir) {
	if (this.dir - 2 == dir || this.dir + 2 == dir) {}
	else { this.dir = dir; };
}

Serpent.prototype.collision = function() {
	var tete = this.anneaux[0];
	for (var l =1; l < this.longueur; l++) {
			var devant = this.anneaux[l];
			if (devant.i == tete.i && devant.j == tete.j) {
				insertScore();
				gameover();
				clearInterval(game);
				playing = false;
			}
			for (var h =1; h < terrain.length; h++) {
				if (terrain[h][0]==tete.j & terrain[h][1]==tete.i) {
					insertScore();
					gameover();
					clearInterval(game);
					playing = false;
				}
			}
		}
}

// --------------------------------------------------- Classe terrain

var terrain=[];

function Terrain(l,h, sortieH, sortieV) {
	this.longueur = l;
	this.hauteur = h;
	this.nombre = l*h;
	this.sortieDH = sortieH;
	this.sortieDV = sortieV;
	this.sortieFH = sortieH+5;
	this.sortieFV = sortieV+5;
	y=0;
}

Terrain.prototype.affiche = function(){
	terrain=[];
	for (var i = 0; i < this.nombre; i++) {
			x=0;
			for (var j = 0; j < this.nombre; j++) {
				ctx.fillStyle = 'rgb(119,89,69)';
				ctx.fillRect(x,y,20,20);
				/* contour : restent tjr tel quel */
				if (i==0 & j==0) {
					var img = new Image();
					img.src = 'tiles/hollow07.png';
					ctx.drawImage(img, x, y, 20,20);
					terrain.push([i,j]);
				}
				else if (i==19 & j==0) {
					var img = new Image();
					img.src = 'tiles/hollow11.png';
					ctx.drawImage(img, x, y, 20,20);
					terrain.push([i,j]);
				}
				else if (i==0 & j==19) {
					var img = new Image();
					img.src = 'tiles/hollow09.png';
					ctx.drawImage(img, x, y, 20,20);
					terrain.push([i,j]);
				}
				else if (i==19 & j==19) {
					var img = new Image();
					img.src = 'tiles/hollow10.png';
					ctx.drawImage(img, x, y, 20,20);
					terrain.push([i,j]);
				}
				/* fin des contour */

				/* sortie des contours */
				else if (i> this.sortieDH & i<this.sortieFH & j==0
						|| j> this.sortieDV & j<this.sortieFV & i==0
						|| i> this.sortieDH & i<this.sortieFH & j==19
						|| j> this.sortieDV & j<this.sortieFV & i==19)
				{
				}
				/* fin des sorties de la map */

				else if (j==0) {
					var img = new Image();
					img.src = 'tiles/hollow02.png';
					ctx.drawImage(img, x, y, 20,20);
					terrain.push([i,j]);
				}
				else if (i==0) {
					var img = new Image();
					img.src = 'tiles/hollow03.png';
					ctx.drawImage(img, x, y, 20,20);
					terrain.push([i,j]);
				}
				else if (i==19) {
					var img = new Image();
					img.src = 'tiles/hollow15.png';
					ctx.drawImage(img, x, y, 20,20);
					terrain.push([i,j]);
				}
				else if (j==19) {
					var img = new Image();
					img.src = 'tiles/hollow01.png';
					ctx.drawImage(img, x, y, 20,20);
					terrain.push([i,j]);
				}
				else {
				}

				x=x+20;
			}
			y=y+20;
		}
	y=0;
}

Terrain.prototype.lit = function(i,j){
	this.cordx = j*Terrain.largeur+i;
}

Terrain.prototype.ecrit = function(i,j, val){
}

// --------------------------------------------------- Classe fruit

function Fruit(x, y) {
	this.posX = x;
	this.posY = y;
}

Fruit.prototype.regen = function() {
	var randomX=getRandomInt(18)+1;
	var randomY=getRandomInt(18)+1;
	this.posX = 20*randomX;
	this.posY = 20*randomY;
	score = score+1;
	var divscore = document.getElementById("score_num");
	if (score%10 == 0)
	{
		divscore.className="awesome";
	}
	else {
		divscore.classList.remove("awesome");
	}
	divscore.innerText = score;
	valeur = Math.floor(Math.random() * 33);
}

var imgfruits = [
'food/Cookie.png','food/Apple.png','food/Avocado.png','food/Bacon.png','food/Bread.png',
'food/Brownie.png','food/Cheese.png','food/Cherry.png','food/ChickenLeg.png','food/Eggplant.png',
'food/Eggs.png','food/Fish.png','food/FishFillet.png','food/Honey.png','food/Honeycomb.png',
'food/Jerky.png','food/Lemon.png','food/MelonWater.png','food/Onion.png','food/Peach.png',
'food/PepperRed.png','food/PieLemon.png','food/PiePumpkin.png','food/Pineapple.png','food/Potato.png',
'food/Pretzel.png','food/Sashimi.png','food/Steak.png','food/Strawberry.png','food/Sushi.png',
'food/Tomato.png','food/Turnip.png','food/Waffles.png'
]

Fruit.prototype.place = function(valeur) {
	ctx.fillStyle = 'rgb(119,89,60)';
	ctx.fillRect(this.posX, this.posY, 20, 20);
	var img = new Image();
	img.src = imgfruits[valeur];
	ctx.drawImage(img, this.posX, this.posY, 20,20);
	for (var h =1; h < terrain.length; h++) {
		if (terrain[h][0]==this.posY & terrain[h][1]==this.posX) {
			terrain.splice([h], 1);
		}
	}
}

// --------------------------------------------------- Classe Obstacle

function Obstacle(x, y) {
	this.posX = x;
	this.posY = y;
}

var imgobs = [
	'tiles/rocky01.png','tiles/ob_herb2.png','tiles/ob_herb1.png','tiles/bat.png'
]
Obstacle.prototype.place = function(elemImg, randX,randY) {
	if (randY == 19 || randX == 19 || randX == 0 || randY == 0 || randX == 8 || randY == 10){
		return;
	}
	terrain.push([randY, randX]);
	var Ox = 20*randX;
	var Oy = 20*randY;
	ctx.fillStyle = 'rgb(119,89,60)';
	var img = new Image();
	if (elemImg == 5){
		elemImg = 3;
	}
	img.src=imgobs[elemImg];
	ctx.drawImage(img, Ox, Oy, 20, 20);
}

// --------------------------------------------------- change direction

if ( playing = true ) {
	document.addEventListener("keydown", function(event) {
		switch(event.code) {
			case "KeyW":
			case "ArrowUp":
				s.changeDirection(0);
				break;
			case "KeyD":
			case "ArrowRight":
				s.changeDirection(1);
				break;
			case "KeyS":
			case "ArrowDown":
				s.changeDirection(2);
				break;
			case "KeyA":
			case "ArrowLeft":
				s.changeDirection(3);
				break;
		}
	});
}

// --------------------------------------------------- initialisation du jeu

var t = new Terrain(5,5,2,5);
var s = new Serpent(8,8,9,0);
var f = new Fruit(40,40);
var o = new Obstacle(60,60);
var nbObst=9;
var elemIm=getRandomInt(3);
var i=0;
var score=0;
var gamemode="survival";
var playing = false;
var valeur = Math.floor(Math.random() * 33);
var xOb = getRandomInt(10);
var yOb = getRandomInt(10);

t.affiche();
s.positionne();
f.place();
o.place(1, xOb, yOb);


// --------------------------------------------------- jeu lancé

function anim() {
	playing = true;
	ctx.clearRect(0, 0, c.width, c.height);
	t.affiche();
	for (var i = 0; i < nbObst; ++i) {
		if (i%2 == 0){
			o.place(elemIm+1,xOb+i,yOb+i*2);
		}
		else {
			ennemi =
			o.place(elemIm,xOb+i*2,yOb+i);
		}
	}
	f.place(valeur);
	s.first(f);
	s.deplace();
	s.collision();
	s.positionne();
}

var game = setInterval(anim, 80);

function gameover() {
	playing = false;
	clearInterval(game);
	ctx.clearRect(0, 0, c.width, c.height);
	c.classList.add("back-awesome");
	var restart = document.getElementById("dead");
	restart.classList.remove("hidden");
	if(timer==60) {
		document.getElementById("gameovertext").innerText = "TIME OVER";
	}
}

// --------------------------------------------------- play again

function restart() {
	timer = 0;
	$("#highscore_add").addClass("hidden");
	var restart = document.getElementById("dead");
	restart.classList.add("hidden");
	ctx.clearRect(0, 0, c.width, c.height);
	t = new Terrain(5,5,2,5);
	s = new Serpent(8,8,9,0);
	o = new Obstacle(60,60);
	f = new Fruit(40,40);
	var divscore = document.getElementById("score_num");
	score = score-score;
	divscore.innerText = score;
	t.affiche();
	s.positionne();
	for (var i = 0; i < nbObst; ++i) {
		if (i%2 == 0){
			o.place(1,xOb+i,yOb+i*2);
		}
		else {
			o.place(2,xOb+i*2,yOb+i);
		}
	}
	f.place();
	game = setInterval(anim, 80);
}

// --------------------------------------------------- playlist

var audioList = [{
  name:"Donkey Kong Country OST:0123",
  src: 'music/DKC-0123.mp3'
}, {
  name:"Animal Crossing OST:307",
  src: 'music/307-AgentKK.mp3'
},{
  name:"Undertale OST:049",
  src: 'music/Undertale-049.mp3'
},{
  name:"Donkey Kong Country OST:0623",
  src: 'music/DKC-0623.mp3'
},{
  name:"Animal Crossing OST:235",
  src: 'music/235-KKHouse.mp3'
}];

var song = document.getElementById("next");
song.addEventListener("click", nextsong);
var id_audio=0;
var title = document.getElementById("playing");
title.innerHTML = "&nbsp;"+audioList[id_audio]["name"];

function nextsong() {
	if (id_audio===audioList.length-1) {
		id_audio=0;
	}
	else {
		id_audio=id_audio+1;
	}
	var music = document.getElementById("music");
	var title = document.getElementById("playing");
	music.src = audioList[id_audio]["src"];
	title.innerHTML = "&nbsp;"+audioList[id_audio]["name"];
}

// --------------------------------------------------- affichage du tableau des scores

$.ajax({
	url: "score/extract.php",
	type: "get",
	dataType: "json",
	success: function(retour) {
		if (retour.ok==true) {
			retour.objets.forEach(function (obj) {
				var table = document.getElementById('score_table');
				var ev = document.createElement("tr");
				ev.innerHTML = '<td>'+obj.pseudo+'</td><td>'+obj.score+'</td><td>'+obj.date+'</td>';
				table.appendChild(ev);
			});
		}
		else if (retour.ok==false) {
			console.log("fail");
		}
	},
	error: function (retour) {
		console.log("error");
	}
})


// --------------------------------------------------- insertion du score dans la base de données

function insertScore() {
	$("#highscore_add").removeClass("hidden");
	document.getElementById("score_show").innerText = score;
	var inputscore = document.getElementById("score_real");
	inputscore.value = score;
}


// envoi du formulaire
$("#highscore_add_form").submit(function(e) {
		e.preventDefault(); // avoid to execute the actual submit of the form.

		var form = $(this);
		var url = form.attr('action');

		$.ajax({
			type: "POST",
			url: "score/insert.php",
			data:{
				'pseudo':$("#pseudo").val(),
				'score':$("#score_real").val(),
			},
			success: function(retour)
			{
				$("#highscore_add").toggleClass("hidden");
				return;
			},

		});
		var table = document.getElementById('score_table');
		var ev = document.createElement("tr");
		var today = new Date();
		var dd = String(today.getDate()).padStart(2, '0');
		var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
		var yyyy = today.getFullYear();
		today = dd + '/' + mm + '/' + yyyy;
		ev.innerHTML = '<td>'+$("#pseudo").val()+'</td><td>'+$("#score_real").val()+'</td><td>'+today+'</td>';
		table.appendChild(ev);

});

// --------------------------------------------------- Desactivation des fenêtres

$( "#close_add" ).click(function() {
	$("#highscore_add").toggleClass("hidden");
});

$( "#close_tuto" ).click(function() {
	$("#div_tuto").toggleClass("hidden");
});

// --------------------------------------------------- Changer le gamemode

var timer = 0;
var gamemode = "survival";

var timerval = document.getElementById("timer_show");
function myTimer() {
	if (playing) {
		timer = timer+1;
		timerval.innerHTML = timer;
		if (timer==60) {
			gameover();
			return;
		}
	}
	else {
		var timerinterval = "";
		return;
	}
}

$( "#survival" ).click(function() {
	timer = 0;
	score = 0;
	var divscore = document.getElementById("score_num");
	divscore.innerText = score;
	var game_mode = document.getElementById("game_mode");
	game_mode.innerText = "Survival";
	document.getElementById('survival').disabled = true;
	document.getElementById('adventure').disabled = false;
	gamemode = "survival";
	$("#timer").addClass("hidden");
	clearInterval(timerinterval);
});

$( "#adventure" ).click(function() {
	timer = 0;
	score = 0;
	var divscore = document.getElementById("score_num");
	divscore.innerText = score;
	var game_mode = document.getElementById("game_mode");
	game_mode.innerText = "Aventure";
	document.getElementById('adventure').disabled = true;
	document.getElementById('survival').disabled = false;
	gamemode = "adventure";
	$("#timer").removeClass("hidden");
	timerval.innerText = timer;
	timerinterval = setInterval(myTimer, 1000);
});



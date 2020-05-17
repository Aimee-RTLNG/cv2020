import Zdog from 'zdog';

// Rotation du logo
$('.navbar-brand-action').on('mouseenter', function(){
    $('.navbar-brand-action img').addClass('rotation');
}).on('mouseleave', function(){
    $('.navbar-brand-action img').removeClass('rotation');
}).on('click', function(){
  $('.giraffe-main').fadeIn();
  animate();
})

// Giraffe
var giraffe_orange = '#FFA500';
var giraffe_brown = '#8B4513';
var giraffe_head_diameter = 90;

// rotating flag variable
let isSpinning = true;

let happy_giraffe = false;
let animation_over = false;

let giraffe = new Zdog.Illustration({
    // set canvas with selector
    element: '.giraffe-canvas',
    dragRotate: true,
    // stop rotation when dragging starts
    onDragStart: function() {
        $('.giraffe-main').removeClass('peach-cursor');
        if(!happy_giraffe){
            let str= $('.giraffe-main textPath').text();
            str.length
            let clear_text = setInterval(function(){ 
                str = str.substring(0, str.length - 1);
                $('.giraffe-main textPath').text(str);
                let newStr;
                if(!str.length){
                    clearInterval(clear_text);
                    newStr = "❤ ";
                    $('.giraffe-main svg textPath').attr('fill', '#ff6666');
                    let new_text = setInterval(function(){ 
                        str = str + newStr;
                        $('.giraffe-main textPath').text(str);
                        if(str.length > 75){
                            clearInterval(new_text);
                            // $('.circleText').css("animation", "none");
                            let svg_width = 400;
                            let svg_height = 400;
                            let top = 0;
                            let svg_opacity = 1;
                            let reduce_size = setInterval(function(){ 
                                svg_width = svg_width - 1.5;
                                svg_height = svg_height - 1.5;
                                svg_opacity = svg_opacity - 0.02;
                                top = top + 1;
                                $('.giraffe-main svg').attr('width', svg_width);
                                $('.giraffe-main svg').attr('height', svg_height);
                                $('.giraffe-main svg textPath').attr('fill-opacity', svg_opacity);
                                animation_over=true;
                                if(svg_width == 0){
                                    clearInterval(reduce_size);
                                }
                            }, 10);
                        }
                    }, 20);
                }
            }, 20);
        }
        happy_giraffe=true;
        smile.rotate.z = -1.5*Math.PI; 
    },
    onDragMove: function( pointer, moveX, moveY ) {
        isSpinning = false;
    },
    onDragEnd: function() {
        // remove highlight colors on drag end
        isSpinning = true;
     },
});

$('.giraffe-main').on('click', function(){
  if(happy_giraffe && animation_over){
    setTimeout(function(){ 
      $('.giraffe-main').fadeOut();
    }, 1000);
  }
})

// Yeux
let eyeR = new Zdog.Ellipse({
    addTo: giraffe,
    diameter: 1,
    stroke: 20,
    translate: { x: 40 },
    color: '#000',
});
let eyeL = new Zdog.Ellipse({
    addTo: giraffe,
    diameter: 1,
    stroke: 20,
    translate: { x: -40 },
    color: '#000',
});

// Tête
let head = new Zdog.Cylinder({
    addTo: giraffe,
    diameter: giraffe_head_diameter,
    length: 70,
    stroke: false,
    color: giraffe_orange,
  });

// Museau
let nose = new Zdog.Hemisphere({
    addTo: giraffe,
    diameter: giraffe_head_diameter,
    // fill enabled by default
    // disable stroke for crisp edge
    stroke: false,
    color: '#FFA500',
    translate: { z: 35 }
  });

// Cou
let neck = new Zdog.Cylinder({
    addTo: giraffe,
    diameter: giraffe_head_diameter-20,
    length: 120,
    stroke: false,
    translate: { y: 50, z: -50 },
    rotate: { x: 20 },
    color: giraffe_orange,
  });

// Cornes 
let hornR = new Zdog.Cylinder({
    addTo: giraffe,
    diameter: 20,
    length: 30,
    stroke: false,
    translate: { x: 15, y: -40, z:-40},
    rotate: { x: 5, y: -3 },
    color: giraffe_brown,
  });
let hornL = new Zdog.Cylinder({
    addTo: giraffe,
    diameter: 20,
    length: 30,
    stroke: false,
    translate: { x: -15, y: -40, z:-40},
    rotate: { x: 5, y: 3 },
    color: giraffe_brown,
  });

// Arrière de la tête
let backhead = new Zdog.Hemisphere({
    addTo: giraffe,
    diameter: giraffe_head_diameter,
    // fill enabled by default
    // disable stroke for crisp edge
    stroke: false,
    color: '#FFA500',
    rotate: { x: 3 },
    translate: { z: -35 }
  });

// Oreilles
let earL = new Zdog.Shape({
    addTo: giraffe,
    path: [ // triangle
      { x:  -20, y:  -20, z: -60 },
      { x:  -20, y:  -50, z: -65 },
      { x:  -30, y:  -65, z: -65 },
      { x:  -35, y:  -40, z: -65 }
    ],
    rotate: { z: -0.5 },
    stroke: 20,
    fill: true,
    color: giraffe_orange
  });

  let earLF = new Zdog.Shape({
    addTo: giraffe,
    path: [ // triangle
      { x:  -20, y:  -20, z: -59 },
      { x:  -20, y:  -50, z: -65 },
      { x:  -30, y:  -65, z: -65 },
      { x:  -35, y:  -40, z: -65 }
    ],
    rotate: { z: -0.5 },
    stroke: 4,
    fill: true,
    color: giraffe_brown
  });

let earR = new Zdog.Shape({
    addTo: giraffe,
    path: [ // triangle
      { x:  20, y:  -20, z: -60 },
      { x:  20, y:  -50, z: -65 },
      { x:  30, y:  -65, z: -65 },
      { x:  35, y:  -40, z: -65 }
    ],
    rotate: { z: 0.5 },
    stroke: 20,
    fill: true,
    color: giraffe_orange
  });
  let earRF = new Zdog.Shape({
    addTo: giraffe,
    path: [ // triangle
        { x:  20, y:  -20, z: -59 },
        { x:  20, y:  -50, z: -64 },
        { x:  30, y:  -65, z: -64 },
        { x:  35, y:  -40, z: -64 }
      ],
    rotate: { z: 0.5 },
    translate : { z: 0.5 },
    stroke: 4,
    fill: true,
    color: giraffe_brown
  });

// Sourire
let smile = new Zdog.Ellipse({
    addTo: giraffe,
    diameter: 25,
    quarters: 2,
    translate: { z: 70 },
    rotate: { z: -0.5*Math.PI },
    stroke: 10,
    color: '#000',
  });

// Tâches
let tache1 = new Zdog.Shape({
    addTo: giraffe,
    path: [ // triangle
      { x:   0, y:  -20 },
      { x:  10, y:  -30 },
      { x:  20, y:  -25 },
      { x:  10, y:  -20 },
    ],
    rotate: { y: 1 },
    translate: { x : -35, y: 80, z:-50 }, 
    fill: true,
    stroke: 10,
    color: giraffe_brown
  });

  let tache2 = new Zdog.Shape({
    addTo: giraffe,
    path: [ // triangle
      { x:   0, y:  -10 },
      { x:  5, y:  5 },
      { x:  20, y:  -10 },
      { x:  10, y:  -20 },
    ],
    rotate: { y: 1.7, x: 0.2 },
    translate: { x : -30, y: 92, z:-80 }, 
    fill: true,
    stroke: 10,
    color: giraffe_brown
  });

  let tache3 = new Zdog.Shape({
    addTo: giraffe,
    path: [ // triangle
      { x:   0, y:  -10 },
      { x:  5, y:  5 },
      { x:  20, y:  -10 },
      { x:  10, y:  -20 },
    ],
    rotate: { y: 3, x: -0.4 },
    translate: { x : 15, y: 80, z:-102 }, 
    fill: true,
    stroke: 10,
    color: giraffe_brown
  });

  let tache4 = new Zdog.Shape({
    addTo: giraffe,
    path: [ // triangle
      { x:   0, y:  -10 },
      { x:  5, y:  5 },
      { x:  20, y:  -10 },
      { x:  10, y:  -20 },
    ],
    rotate: { y: 3, x: -0.4, z: 1 },
    translate: { x : 5, y: 35, z:-80 }, 
    fill: true,
    stroke: 10,
    color: giraffe_brown
  });

  let tache5 = new Zdog.Shape({
    addTo: giraffe,
    path: [ // triangle
      { x:   0, y:  -10 },
      { x:  5, y:  5 },
      { x:  20, y:  -10 },
      { x:  10, y:  -20 },
    ],
    rotate: { y: 1.5, x: -0.6, z: 1.8 },
    translate: { x : 32, y: 35, z: -60 }, 
    fill: true,
    stroke: 10,
    color: giraffe_brown
  });

  let tache6 = new Zdog.Shape({
    addTo: giraffe,
    path: [ // triangle
      { x:   0, y:  -20 },
      { x:  10, y:  -30 },
      { x:  20, y:  -20 },
      { x:  10, y:  -20 },
    ],
    rotate: { y: 1.5, x: 9.5 },
    translate: { x : 30, y: 65, z:-45 }, 
    fill: true,
    stroke: 10,
    color: giraffe_brown
  });

// update & render
giraffe.updateRenderGraph();

function animate() {
        // rotate
    if ( isSpinning ) {
        giraffe.rotate.y += 0.01;
    }
    giraffe.updateRenderGraph();
    requestAnimationFrame(animate);
}

// Enveloppe
$('#contactForm').on('submit', function(e){
  e.preventDefault;
  return false;
});

$('#contactFormSend').on('click', function(){
    /*
    $('.contact-enveloppe').show();
    $('.contact-enveloppe').addClass('close-enveloppe');
    setTimeout(function(){ 
        $('.g-recaptcha').fadeIn();
     }, 1500);
    */
   let subject = "Demande de contact de '"+$("#contact_name").val()+"' via le formulaire de contact";
   let mail = $("#contact_mail").val();
   let contact = " \r\n Mail : "+$("#contact_mail").val()+ "\r\n Téléphone : "+$("#contact_phone").val();
   let message = $("#contact_message").val()+contact;
   window.open('mailto:aimeeritleng@outlook.com?subject='+subject+'&body='+message);
   $('.form-content').html("<h4>Merci pour votre message !<h4>");
});

// Changer l'écriture de la page contact
let fonts = ['Pangolin', 'Niconne', 'Patrick Hand SC', 'Kalam', 'Over the Rainbow', 'Comic Sans Ms'];

let initial_font = $('.form-content textarea').css('font-family');
let font_number = 0;
$('#switchFont').on('click', function(){
  font_number++;
  if(font_number >= fonts.length){
    font_number = 0;
  }
  let new_font = "\"" + fonts[font_number] + "\", cursive";
  $('.form-content textarea').css('font-family', new_font);
  $('.form-content input').css('font-family', new_font);
  if(fonts[new_font] == "Comic Sans Ms"){

  }
});
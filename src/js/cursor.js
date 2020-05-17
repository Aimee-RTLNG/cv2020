import $ from 'jquery';

const cursor = document.querySelector('.cursor');

document.addEventListener('mousemove', e => {
    cursor.setAttribute("style", "top: "+(e.pageY - 7)+"px; left: "+(e.pageX - 7)+"px;")
})

// Interactions avec les liens
$('.nav-item').on('click', function(){
    $('.cursor').addClass('click-link');
    // $('.cursor').delay( 800 ).removeClass('click-link');
    setTimeout(function(){
        $('.cursor').removeClass('click-link');
    },350);
});

$('.nav-item').on('mouseover', function(){
    $('.cursor').addClass('hover-link');
});

$('.nav-item').on('mouseout', function(){
    $('.cursor').removeClass('hover-link');
});


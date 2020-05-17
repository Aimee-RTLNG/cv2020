import $ from 'jquery';

if (window.document.documentMode) {
    $('.cursor').css('background', 'black');
    $('.cursor').css('background-color', 'black');

    $('.modal').fadeIn();

    $('.cursor').remove();

    $('body, body a').css('cursor', 'auto');
}

$('.modal .modal-close').on('click', function(){
    $('.modal').fadeOut();
})

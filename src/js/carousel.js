
import $ from 'jquery';
window.$ = window.jQuery = $;
import 'jquery-ui/ui/widgets/tooltip';
import 'jquery-ui/ui/widgets/draggable';

let slides_parameters = [
    { "color": "#0084ff", "left": "10" },
    { "color": "#ff00d4", "left": "60" },
    { "color": "#08bd68", "left": "100" },
    { "color": "#575757", "left": "145" },
    { "color": "#ff7300", "left": "190" }
];

$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});


$("#drag-slide").draggable({
    containment: ".carousel-indicators",
    scroll: true,
    axis: "x"
});

$("#drag-slide").on('drag', function () {

    let position_left_dragged = $("#drag-slide").position().left;
    let drag_color;
    let slide_nb;

    $("#drag-slide").css('transition-duration', '0s');

    if (position_left_dragged <= 30) {
        slide_nb = 0;
    } else if (position_left_dragged > 30 && position_left_dragged <= 80) {
        slide_nb = 1;
    } else if (position_left_dragged > 80 && position_left_dragged <= 120) {
        slide_nb = 2;
    } else if (position_left_dragged > 120 && position_left_dragged <= 170) {
        slide_nb = 3;
    } else if (position_left_dragged > 170) {
        slide_nb = 4;
    }

    let sliderItem = $('.carousel-indicators li')[slide_nb];
    $(sliderItem).removeClass('active');
    $(sliderItem).addClass('active');

    let menuItem = $('.navbar-nav li')[slide_nb];
    $('.navbar-nav li').removeClass('active');
    $(menuItem).addClass('active');

    drag_color = slides_parameters[slide_nb]["color"];
    $("#drag-slide").css('background-color', drag_color);

    let slide_active_id = $(".carousel-item.active").data('slideid');
    if( ( slide_active_id - slide_nb ) == 1 || ( slide_active_id - slide_nb ) == -4  ){
        $("#content-carousel").carousel(slide_nb).carousel("pause");
    }else{
        $("#content-carousel .active").removeClass('active');
        let carousel_items = $("#content-carousel .carousel-item");
        let selected_slide = carousel_items[slide_nb];
        $(selected_slide).addClass('active');
    }
});

$("#drag-slide").on('mouseup', function () {
    $("#drag-slide").css('transition-duration', '.4s');
    let position_left_dragged = $("#drag-slide").position().left;
    let position_left;
    let slide_nb;
    if (position_left_dragged <= 30) {
        slide_nb = 0;
    } else if (position_left_dragged > 30 && position_left_dragged <= 80) {
        slide_nb = 1;
    } else if (position_left_dragged > 80 && position_left_dragged <= 120) {
        slide_nb = 2;
    } else if (position_left_dragged > 120 && position_left_dragged <= 170) {
        slide_nb = 3;
    } else if (position_left_dragged > 170) {
        slide_nb = 4;
    }
    position_left = slides_parameters[slide_nb]["left"];
    $("#content-carousel").carousel(slide_nb).carousel("pause");
    $("#drag-slide").css('left', position_left + "px");
});

$('.carousel-indicators li, .navbar-nav .nav-item').on('click', function () {
    $('.nav-item').removeClass('active');
    let slide_nb = $(this).attr('data-slide-to');
    let position_left = slides_parameters[slide_nb]["left"];
    let drag_color = slides_parameters[slide_nb]["color"];
    $("#drag-slide").css('left', position_left + "px");
    $("#drag-slide").css('background-color', drag_color);

    let menuItem = $('.navbar-nav li')[slide_nb];
    $('.navbar-nav li').removeClass('active');
    $(menuItem).addClass('active');
})

var bk_nb = 3;
$("#secret-gif").on('click', function () {
    $("#content-carousel").carousel(0).carousel("pause");
    let position_left = slides_parameters[0]["left"];
    let drag_color = slides_parameters[0]["color"];
    $("#drag-slide").css('background-color', drag_color);
    $("#drag-slide").css('left', position_left + "px");

    let menuItem = $('.navbar-nav li')[0];
    $('.navbar-nav li').removeClass('active');
    $(menuItem).addClass('active');

    var url = "ressources/img/ambiant/giphy" + bk_nb + ".gif";
    $(".logo-background").attr('src', url);
    bk_nb = bk_nb + 1;
    if (bk_nb == 10) {
        bk_nb = 1;
    }
})

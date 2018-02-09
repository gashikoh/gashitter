window.$ = window.jQuery = require('jquery');

require('slick-carousel');

require('bootstrap');

/* Init Slick */
$('.slicker-slider-products').each(function() {

    let slide = $(this).find('.list-container'),
        nextArrow = $(this).find('.ui-slider-control.right'),
        prevArrow = $(this).find('.ui-slider-control.left');

    slide.slick({
        centerMode: true,
        centerPadding: '20px',
        slidesToShow: $(this).attr('data-slides'),
        slidesToScroll: 3,
        nextArrow: nextArrow,
        prevArrow: prevArrow,
        autoplay: true
    });

});

let top_slides = $("#top-banner-slide"),
    slides = top_slides.find('.slides'),
    nextArrow = top_slides.find('.direction-control.left'),
    prevArrow = top_slides.find('.direction-control.right');

slides.slick({
    slidesToShow: 1,
    nextArrow: nextArrow,
    prevArrow: prevArrow,
    autoplay: true
});

/*
  Category Dropdown
 */
$('.category-dropdown .dropdown.btn-group').hover(function() {
    $(this).addClass('open');
}, function() {
    $(this).removeClass('open');
});
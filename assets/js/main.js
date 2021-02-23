$(document).ready(function(){
    
    $(".header__navbar__left__button-icon").click(function(){
        $(".header__navbar__left-categories").toggle();
    });

    $('.header__navbar__right__button').click(function () {
        $('.header__navbar__right-menu').slideToggle('slow')
    });

    $('.content__sell__slider').slick({
        autoplay: true,
        autoplaySpeed: 9000,
        slideToShow: 2,
        arrows: false,
    });
    $('#prev').on('click', function() {
        $('.product-slider').slick('slickPrev');
    });
    $('#next').on('click', function() {
        $('.product-slider').slick('slickNext');
    });
    
});




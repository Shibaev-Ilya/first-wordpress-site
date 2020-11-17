jQuery(function($) {
    "use strict";

    $(document).ready(function ($) {
        $('.js-main-slider').slick({
            dots: true,
            arrows: false,
            infinite: true,
            autoplay: true,
            lazyLoad: 'ondemand',
            autoplaySpeed: 2500,
            fade: true,
            cssEase: 'linear'
        });
    });

    $(document).ready(function() {
        var btn = $('.js-scroll-to-top');
        $(window).scroll(function() {
            if ($(window).scrollTop() > 400) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });
        btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop:0}, 400);
        });
    });
});

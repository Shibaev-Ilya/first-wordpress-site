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
});

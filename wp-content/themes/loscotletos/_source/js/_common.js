jQuery(function($) {
    "use strict";

    $(document).ready(function() {
        //scrollHeight общаяя высота страницы с учётом прокрутки
        var scrollHeight = Math.max(
            document.body.scrollHeight, document.documentElement.scrollHeight,
            document.body.offsetHeight, document.documentElement.offsetHeight,
            document.body.clientHeight, document.documentElement.clientHeight
        );
        //высота видимой части страницы
        var viewHeight = document.documentElement.clientHeight;

        var btn = $('.js-scroll-to-top');
        $(window).scroll(function() {
            //текущая прокрутка сверху
            let scrollY = window.pageYOffset;

            if ($(window).scrollTop() > 400 && (scrollY + viewHeight + 69) < scrollHeight) {
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

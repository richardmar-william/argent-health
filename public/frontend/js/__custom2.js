(function ($) {
    "use strict";
    // Use to keep track of scroll postion after website load
    document.addEventListener("DOMContentLoaded", function (event) {
        if (localStorage.getItem("currentPage")) {
            if (localStorage.getItem("currentPage") == window.location.href) {
                const scrollpos = localStorage.getItem("scrollpos");
                if (scrollpos) window.scrollTo(0, scrollpos);
            }
        }
    });

    window.onbeforeunload = function (e) {
        localStorage.setItem("scrollpos", window.scrollY);
        localStorage.setItem("currentPage", window.location.href);
    };
})(jQuery);







    //   navbar-fixed JS Start
    $(window).scroll(function() {
        // console.log($(window).scrollTop())
        if ($(window).scrollTop() > 63) {
            $('header').addClass('navbar-fixed');
        }
        if ($(window).scrollTop() < 64) {
            $('header').removeClass('navbar-fixed');
        }
    });
    //   navbar-fixed JS End

    // BEARED-slider JS Start
    $('.beared-slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1.15
            },
            540: {
                items: 2.15
            },
            600: {
                items: 2.15
            },
            800: {
                items: 3.15
            },

            1000: {
                items: 3.15,
            }
        }
    });
    // BEARED-slider JS End

    // BEARED-slider JS Start
    $('.other-slider').owlCarousel({
        loop: true,
        margin: 50,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1.30,
                margin: 20,
            },
            600: {
                items: 2.30
            },
            800: {
                items: 3.30
            },
            1000: {
                items: 4.30,
            }
        }
    });
    // BEARED-slider JS End
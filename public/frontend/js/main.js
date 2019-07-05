/**
 * Exibir map-filter
 */
$(document).ready(function() {
    $('#map-filter-access').click(function (e) {
        e.preventDefault();

        if ($(this).hasClass("active")) {
            $('.map-filter-wrapper').css({
                "left": "-" + 260 + "px"
            });

            $('.map-filter-overlay').css({
                "opacity": "0", "width": "0"
            });

            $(this).removeClass("active");

            $('#map-filter-access > i').removeClass("fa-angle-double-left").addClass("fa-angle-double-right");
        } else {
            $('.map-filter-wrapper').css({
                "left": "0px"
            });

            $('.map-filter-overlay').css({
                "opacity": "1", "width": "100%"
            });

            $(this).addClass("active");

            $('#map-filter-access > i').removeClass("fa-angle-double-right").addClass("fa-angle-double-left");
        }
    });

    $('.map-filter-overlay').click(function (e) {
        e.preventDefault();

        $('.map-filter-wrapper').css({
            "left": "-" + 260 + "px"
        });

        $('.map-filter-overlay').css({
            "opacity": "0", "width": "0"
        });

        $('#map-filter-access').removeClass("active");

        $('#map-filter-access > i').removeClass("fa-angle-double-left").addClass("fa-angle-double-right");
    });
});

/**
 * Exibir map-search
 */
$(document).ready(function() {
    $('#map-search-overlay-closes, #map-search-closes').click(function (e) {
        e.preventDefault();

        if ($(window).width() <= 767) {
            $(".map-search-wrapper").css({
                "right": "-" + 100 + "%"
            });
            $(".map-search-overlay").css({
                "opacity": "0", "width": "0"
            });
        } else {
            $(".map-search-wrapper").css({
                "right": "-" + 60 + "%"
            });

            $('.map-search-overlay').css({
                "opacity": "0", "width": "0"
            });
        }
    });

    $('#map-search-access').click(function (e) {
        e.preventDefault();

        $('.map-search-wrapper').css({
            "right": "0px"
        });

        $('.map-search-overlay').css({
            "opacity": "1", "width": "100%"
        });
    });
});

/**
 * Exibir menu
 */
$(document).ready(function() {
    $('.nav-toggle').click(function() {
        $(this).toggleClass('active');
        $('.header-nav').toggleClass('open');
        event.preventDefault();
    });

    $('.header-nav li a').click(function() {
        $('.nav-toggle').toggleClass('active');
        $('.header-nav').toggleClass('open');

    });

    $(function() {
        $(window).scroll(function() {

            if ($(window).scrollTop() >= 10) {
                $('section.navigation').addClass('fixed');
                $('header').css({
                    "border-bottom": "none",
                    "padding": "15px 0 5px 15px"
                });
                $('header .member-actions').css({
                    "top": "15px"
                });
                $('header .navicon').css({
                    "top": "25px"
                });
            } else {
                $('section.navigation').removeClass('fixed');
                $('header').css({
                    "border-bottom": "solid 1px rgba(255, 255, 255, 0.2)",
                    "padding": "15px 0 5px 15px"
                });
                $('header .member-actions').css({
                    "top": "15px"
                });
                $('header .navicon').css({
                    "top": "25px"
                });
            }
        });
    });
});

function main() {
    (function () {
        'use strict';

        $('a.page-scroll').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - 40
                    }, 900);
                    return false;
                }
            }
        });
    }());
}
main();
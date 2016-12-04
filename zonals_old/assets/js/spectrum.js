/*!
 * Spectrum v1.2.0 (http://themes.startbootstrap.com/spectrum-v1.2.0)
 * Copyright 2013-2015 Start Bootstrap Themes
 * To use this theme you must have a license purchased at WrapBootstrap (https://wrapbootstrap.com)
 */
 
// Functions to run on document ready
jQuery(document).ready(function() {

    // Find Mobile Devices
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    // Initialize Stellar.js Parallax
    if (!isMobile.any()) {
        $(window).stellar({
            horizontalScrolling: false,
            verticalOffset: 0,
            horizontalOffset: 0,
            hideDistantElements: false
        });
    }

    // Activates the Bootstrap Carousel for the Intro Header Options
    $('.carousel').carousel({
        interval: 8000,
        pause: "false",
    })

    // // Activates Owl Carousel Sliders
    // $("#about-1-carousel, #services-1-carousel").owlCarousel({

    //     items: 4,
    //     itemsDesktop: [1199, 3],
    //     itemsDesktopSmall: [979, 3]

    // });

    // $("#about-3-carousel").owlCarousel({

    //     items: 1,
    //     itemsDesktop: [1199, 1],
    //     itemsDesktopSmall: [979, 3]

    // });

    // $("#clients-carousel").owlCarousel({

    //     items: 5,
    //     itemsDesktop: [1199, 3],
    //     itemsDesktopSmall: [979, 3]

    // });

    // $("#portfolio-2-carousel").owlCarousel({

    //     singleItem: true,
    //     navigation: true,
    //     navigationText: [
    //         "<i class='fa fa-chevron-left'></i>",
    //         "<i class='fa fa-chevron-right'></i>"
    //     ],
    //     slideSpeed: 200

    // });

    // $("#project-details-carousel").owlCarousel({

    //     navigation: true,
    //     slideSpeed: 200,
    //     paginationSpeed: 400,
    //     singleItem: true,
    //     navigationText: [
    //         "<i class='fa fa-angle-left'></i> Prev",
    //         "Next <i class='fa fa-angle-right'></i>"
    //     ],

    // });

    // // Activates FitVids jQuery Plugin
    // $(".container").fitVids();

   

 });

// Functions to run on window load
// $(window).load(function() {

//     // Isotope Plugin for Portfolio Filtering
//     // init Isotope
//     var $container = $('.isotope').isotope({
//         itemSelector: '.portfolio-item'
//     });
//     $('#filters').on('click', 'button', function() {
//         var filterValue = $(this).attr('data-filter');
//         $container.isotope({
//             filter: filterValue
//         });
//     });
//     // change is-checked class on buttons
//     $('#filters').each(function(i, buttonGroup) {
//         var $buttonGroup = $(buttonGroup);
//         $buttonGroup.on('click', 'button', function() {
//             $buttonGroup.find('.active').removeClass('active');
//             $(this).addClass('active');
//         });
//     });

// });


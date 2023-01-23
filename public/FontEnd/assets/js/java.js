new WOW().init();
wow = new WOW({
    boxClass: 'wow', // default
    animateClass: 'animated', // default
    animateClass: 'animH', // default
    offset: 0, // default
    mobile: true, // default
    live: true // default
})
wow.init();


// All Sliader
$(document).ready(function() {
    "use strict";

    // Slider-top
    $(".slider-top").owlCarousel({
        nav: true,
        loop: false,
        navText: ["<i class='fal fa-angle-left'></i>", "<i class='fal fa-angle-right'></i>"],
        dots: false,
        autoplay: 4000,
        items: 1,
        autoplayHoverPause: true,
        responsiveClass: true,
    });

    // Projects-slider
    $(".projects-slider").owlCarousel({
        nav: false,
        loop: false,
        navText: ["<i class='fal fa-angle-double-left'></i>", "<i class='fal fa-angle-double-right'></i>"],
        dots: false,
        autoplay: 4000,
        items: 1,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            767: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });

    // Services-slider
    $(".services-slider").owlCarousel({
        nav: false,
        loop: false,
        navText: ["<i class='fal fa-angle-double-left'></i>", "<i class='fal fa-angle-double-right'></i>"],
        dots: false,
        autoplay: 4000,
        items: 1,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            767: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });

    // Clients-slider
    $(".clients-slider").owlCarousel({
        nav: false,
        loop: false,
        navText: ["<i class='fal fa-angle-double-left'></i>", "<i class='fal fa-angle-double-right'></i>"],
        dots: false,
        autoplay: 4000,
        items: 1,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
            },
            767: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    // Product single

    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        vertical: true,
        arrows: false,
        asNavFor: '.slider-for',
        dots: false,
        focusOnSelect: true,
        verticalSwiping: true,
        responsive: [{
                breakpoint: 992,
                settings: {
                    vertical: false,
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    vertical: false,
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 580,
                settings: {
                    vertical: false,
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 380,
                settings: {
                    vertical: false,
                    slidesToShow: 3,
                }
            }
        ]
    });

    //Nav
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 50) {
            $(".sticky").addClass("active");
        } else {
            $(".sticky").removeClass("active");
        }
    });

    //Header Search
    if ($('.search-box-outer').length) {
        $('.search-box-outer').on('click', function() {
            $('body').addClass('search-active');
        });
        $('.close-search').on('click', function() {
            $('body').removeClass('search-active');
        });
    }

    // Mobile Menu
    if ($('.mobile-menu').length) {

        $('.mobile-menu .menu-box');

        var mobileMenuContent = $('.main-header .nav-outer .main-menu').html();
        $('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);
        $('.sticky-header .main-menu').append(mobileMenuContent);

        //Menu Toggle Btn
        $('.mobile-nav-toggler').on('click', function() {
            $('body').addClass('mobile-menu-visible');
        });

        //Menu Toggle Btn
        $('.mobile-menu .menu-backdrop,.mobile-menu .close-btn').on('click', function() {
            $('body').removeClass('mobile-menu-visible');
        });
        $('.mobile-menu .menu-backdrop,.mobile-menu .close-btn').on('click', function() {
            $('body').removeClass('mobile-menu-visible');
        });

    }


    (function($) {

        // Reverse
        // =============================================
        $.fn.reverse = [].reverse;

        // jQuery Extended Family Selectors
        // =============================================
        $.fn.cousins = function(filter) {
            return $(this).parent().siblings().children(filter);
        };

        $.fn.piblings = function(filter) {
            return $(this).parent().siblings(filter);
        };

        $.fn.niblings = function(filter) {
            return $(this).siblings().children(filter);
        };

        // Update
        // =============================================
        $.fn.update = function() {
            return $(this);
        };

        // Dropdown
        // =============================================
        $.fn.dropdown = function(options) {

            // Store object
            var $this = $(this);

            // Settings
            var settings = $.extend({
                className: 'toggled',
            }, options);

            // Simplify variable names
            var className = settings.className;

            // List selectors
            var $ul = $this.find('ul'),
                $li = $this.find('li'),
                $a = $this.find('a');

            // Menu selectors
            var $drawers = $a.next($ul), // All unordered lists after anchors are drawers
                $buttons = $drawers.prev($a), // All anchors previous to drawers are buttons
                $links = $a.not($buttons); // All anchors that are not buttons are links

            // Toggle menu on-click
            $buttons.on('click', function() {
                var $button = $(this),
                    $drawer = $button.next($drawers),
                    $piblingDrawers = $button.piblings($drawers);

                // Toggle button and drawer
                $button.toggleClass(className);
                $drawer.toggleClass(className).css('height', '');

                // Reset children
                $drawer.find($buttons).removeClass(className);
                $drawer.find($drawers).removeClass(className).css('height', '');

                // Reset cousins
                $piblingDrawers.find($buttons).removeClass(className);
                $piblingDrawers.find($drawers).removeClass(className).css('height', '');

                // Animate height auto
                $drawers.update().reverse().each(function() {
                    var $drawer = $(this);
                    if ($drawer.hasClass(className)) {
                        var $clone = $drawer.clone().css('display', 'none').appendTo($drawer.parent()),
                            height = $clone.css('height', 'auto').height() + 'px';
                        $clone.remove();
                        $drawer.css('height', '').css('height', height);
                    } else {
                        $drawer.css('height', '');
                    }
                });
            });

            // Close menu
            function closeMenu() {
                $buttons.removeClass(className);
                $drawers.removeClass(className).css('height', '');
            }

            // Close menu after link is clicked
            $links.click(function() {
                closeMenu();
            });

            // Close menu when off-click and focus-in
            $(document).on('click focusin', function(event) {
                if (!$(event.target).closest($buttons.parent()).length) {
                    closeMenu();
                }
            });
        };
    })(jQuery);

    $('.mobile-menu').dropdown();

    // FancyBox
    $('[data-fancybox="galleryPhoto"], [data-fancybox="galleryVideo"], [data-fancybox], [data-fancybox="gallerySingle"]').fancybox();
    /* --------------------------------------------
         Select
        --------------------------------------------- */
    $('select.niceSelect').niceSelect();

    //Odometer
    $(".counter-item").each(function() {
        $(this).isInViewport(function(status) {
            if (status === "entered") {
                for (var i = 0; i < document.querySelectorAll(".odometer").length; i++) {
                    var el = document.querySelectorAll('.odometer')[i];
                    el.innerHTML = el.getAttribute("data-odometer-final");
                }
            }
        });
    });


});

// for upload file
$('.file-upload').on('change', function(event) {
    var name = event.target.files[0].name;
    $('.file-name').text(name);
})
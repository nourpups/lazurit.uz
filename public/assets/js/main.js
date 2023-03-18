(function ($) {
    "use strict";
    // Hero slider active
    var sliderActive = new Swiper('.slider-active', {
        loop: true,
        speed: 750,
        effect: 'fade',
        slidesPerView: 1,
        navigation: {
            nextEl: '.home-slider-next , .home-slider-next2 , .home-slider-next3',
            prevEl: '.home-slider-prev , .home-slider-prev2 , .home-slider-prev3',
        }
    });
    // Brand logo active
    var sliderActiveThree = new Swiper('.brand-logo-active', {
        loop: true,
        spaceBetween: 20,
        breakpoints: {
            320: {
                slidesPerView: 5
            },
            576: {
                slidesPerView: 4
            },
            768: {
                slidesPerView: 5
            },
            992: {
                slidesPerView: 6
            }
        },
    });

    // Related product active
    var sliderActiveFive = new Swiper('.related-product-active', {
        loop: true,
        spaceBetween: 30,
        navigation: {
            nextEl: '.related-product-next-1',
            prevEl: '.related-product-prev-1',
        },
        breakpoints: {
            320: {
                slidesPerView: 2
            },
            479: {
                slidesPerView: 3
            },
            576: {
                slidesPerView: 3
            },
            768: {
                slidesPerView: 4
            },
            992: {
                slidesPerView: 5
            }
        },
    });

    // /*------ ScrollUp -------- */
    $.scrollUp({
        scrollText: '<i class=" ti-arrow-up "></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
    $('#scrollUp')
    /*-------------------------------
	   Header Search Toggle
    -----------------------------------*/
    var searchToggle = $('.search-toggle');

    searchToggle.on('click', function(e){
        e.preventDefault();
           $('.predictive__search--box').addClass('active');
           setTimeout ( function timeoutFunction () {
            /* show the cursor */
            jQuery('#search').focus();
        }, 500);
    })
    var CloseToggle = $('.predictive__search--close__btn');
    CloseToggle.on('click', function(e){
        e.preventDefault();
           $('.predictive__search--box').removeClass('active');
    })
    /*====== SidebarCart ======*/
    function miniCart() {
        var navbarTrigger = $('.cart-active'),
            endTrigger = $('.cart-close'),
            container = $('.sidebar-cart-active'),
            wrapper = $('.main-wrapper');

        wrapper.prepend('<div class="body-overlay"></div>');

        navbarTrigger.on('click', function(e) {
            e.preventDefault();
            container.addClass('inside');
            wrapper.addClass('overlay-active');
        });

        endTrigger.on('click', function() {
            container.removeClass('inside');
            wrapper.removeClass('overlay-active');
        });

        $('.body-overlay').on('click', function() {
            container.removeClass('inside');
            wrapper.removeClass('overlay-active');
        });
    };
    miniCart();
    /*---- CounterUp ----*/
    $('.count').counterUp({
        delay: 10,
        time: 2000
    });
    /*-----------------------
        Image Popup active
    ------------------------*/
    $('.img-popup').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    /*====== mobile-menu active ======*/
    const slinky = $('#mobile-menu').slinky();
    const slinky2 = $('#mobile-currency').slinky();
    const slinky3 = $('#mobile-language').slinky();

    /*====== off canvas active ======*/
    function mobileMainMenu() {
        var navbarTrigger = $('.mobile-menu-active-button'),
            endTrigger = $('.off-canvas-close'),
            container = $('.off-canvas-active'),
            wrapper = $('.main-wrapper-2');

        wrapper.prepend('<div class="body-overlay-2"></div>');

        navbarTrigger.on('click', function(e) {
            e.preventDefault();
            container.addClass('inside');
            wrapper.addClass('overlay-active-2');
        });

        endTrigger.on('click', function() {
            container.removeClass('inside');
            wrapper.removeClass('overlay-active-2');
        });

        $('.body-overlay-2').on('click', function() {
            container.removeClass('inside');
            wrapper.removeClass('overlay-active-2');
        });
    };
    mobileMainMenu();

    /*-------------------------
      Scroll Animation
    --------------------------*/
    AOS.init({
        once: true,
        duration: 1000,
    });



})(jQuery);


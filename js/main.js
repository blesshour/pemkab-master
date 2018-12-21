jQuery(function ($) {
    'use strict';

    //#main-slider
    $(function () {
        $('#main-slider.carousel').carousel({
            interval: 8000
        });
    });

    $('.window-height').height($(window).height());

    // accordian
    $('.accordion-toggle').on('click', function () {
        $(this).closest('.panel-group').children().each(function () {
            $(this).find('>.panel-heading').removeClass('active');
        });

        $(this).closest('.panel-heading').toggleClass('active');
    });


    // galeri filter
    $(window).load(function () {
        'use strict';
        var $galeri_selectors = $('.galeri-filter >li>a');
        var $galeri = $('.galeri-items');
        $galeri.isotope({
            itemSelector: '.galeri-item',
            layoutMode: 'fitRows'

        });

        $galeri_selectors.on('click', function () {
            $galeri_selectors.removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $galeri.isotope({
                filter: selector
            });
            return false;
        });
    });

    // Contact form
    var form = $('#main-contact-form');
    form.submit(function (event) {
        event.preventDefault();
        var form_status = $('<div class="form_status"></div>');
        $.ajax({
            url: $(this).attr('action'),

            beforeSend: function () {
                form.prepend(form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn());
            }
        }).done(function (data) {
            form_status.html('<p class="text-success">' + data.message + '</p>').delay(8000).fadeOut();
        });
    });

    $('.suara-anda-slider').owlCarousel({
        loop:true,
        margin:10,
        dots: true,
        autoHeight: true,
        items:1,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true
    });

    //goto top
    $('.gototop').click(function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $("body").offset().top
        }, 500);
    });

    //Pretty Photo
    $("a[rel^='prettyPhoto']").prettyPhoto({
        social_tools: false
    });

    //pic-slider
    $('.pic-slider').owlCarousel({
        animateOut: 'fadeOut',
        loop:true,
        margin:1,
        items: 1,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true
    })

    //pic-slider
    $('.small-banner-slider').owlCarousel({
        animateOut: 'fadeOut',
        loop:true,
        margin:1,
        items: 1,
        autoplay:true,
        autoplayTimeout:6000,
        autoplayHoverPause:true
    })

    //hr
    $('.hrbanner').owlCarousel({
        animateOut: 'slideOutDown',
        animateIn: 'flipInX',
        margin:2,
        loop:true,
        autoHeight:true,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        items:1,
    });

    //featured-news
    $('.news2').owlCarousel({
        animateOut: 'fadeOut',
        loop:true,
        margin:1,
        items: 1,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true
    })

    $("#news-slider2").owlCarousel({
        loop:true,
        margin: 5,
        pagination:false,
        navigationText:false,
        autoplay:true,
        autoplayTimeout:3000,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 4
            }
        }
    });
});

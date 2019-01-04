jQuery(function ($) {
    'use strict';
    //navbar
    $(function() {
        $('.navbar-nav li > a:not(:only-child)').click(function(e) {
            $(this).siblings('.dropdown-menu').toggle();
            $('.dropdown-menu').not($(this).siblings()).hide();
            e.stopPropagation();
        });
        $('html').click(function() {
            $('.dropdown-menu').hide();
        });
    });

    //running-info
    $('.runinfo').owlCarousel({
        loop:true,
        margin:10,
        items:1,
        autoplay:true,
        autoplayTimeout:4000,
        autoHeight:true,
        autoplayHoverPause:true
    })


    // Contact form
    var form = $('#main-contact-form');
    form.submit(function (event) {
        event.preventDefault();
        var form_status = $('<div class="form_status"></div>');
        $.ajax({
            url: $(this).attr('action'),

            beforeSend: function () {
                form.prepend(form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Mengirim data...</p>').fadeIn());
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
        autoHeight:true,
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
        autoHeight: true,
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
            481: {
                items: 2
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            }
        }
    });

    $('.sidebar-ann').owlCarousel({
        loop:true,
        margin:10,
        dots: true,
        autoHeight: true,
        items:1,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true
    })

    $('.agenda').owlCarousel({
        loop:true,
        margin:10,
        dots: true,
        autoHeight: true,
        items:1,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true
    })

});

 $(function(){	
   new WOW().init(); 	
 });

 $(function(){
 
    $(document).on( 'scroll', function(){
 
        if ($(window).scrollTop() > 100) {
            $('.scroll-top-wrapper').addClass('show');
        } else {
            $('.scroll-top-wrapper').removeClass('show');
        }
    });
 
    $('.scroll-top-wrapper').on('click', scrollToTop);
});
 
function scrollToTop() {
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $('body');
    offset = element.offset();
    offsetTop = offset.top;
    $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}

// id tombol share facebook
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '2000966146868898',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
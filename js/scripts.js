$(document).ready(function(){
  $('.image--slider').slick({
      lazyLoad: 'ondemand',
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  dots:false,
	  prevArrow: '<a href="javascript:void(0);" class="slick-prev"><img src="img/back.png" alt=""></a>',
      nextArrow: '<a href="javascript:void(0);" class="slick-next"><img src="img/next.png" alt=""></a>',
      responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
  });
    var btn = $(".navbar-brand");
    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '500');
    });
     $('#home').backstretch([
                  "img/home-default.jpg",
                  "img/slide1.jpg",
                  'img/slide2.jpg'
                ], {
                    fade: 1000,
                    duration: 2000
                });
});
! function(e) {
    "use strict";
    e('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
            var a = e(this.hash);
            if ((a = a.length ? a : e("[name=" + this.hash.slice(1) + "]")).length) return e("html, body").animate({
                scrollTop: a.offset().top - 72
            }, 1e3, "easeInOutExpo"), !1
        }
    }), e(".js-scroll-trigger").click(function() {
        e(".navbar-collapse").collapse("hide")
    }), e("body").scrollspy({
        target: "#mainNav",
        offset: 75
    });

    function a() {
        100 < e("#mainNav").offset().top ? e("#mainNav").addClass("navbar-scrolled") : e("#mainNav").removeClass("navbar-scrolled")
    }
    a(), e(window).scroll(a), e("#portfolio").magnificPopup({
        delegate: "a",
        type: "image",
        tLoading: "Loading image #%curr%...",
        mainClass: "mfp-img-mobile",
        gallery: {
            enabled: !0,
            navigateByImgClick: !0,
            preload: [0, 1]
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
        }
    })
}(jQuery);


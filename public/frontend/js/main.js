$(function() {

    $('.slide-one-item').owlCarousel({
        center: false,
        autoplayHoverPause: true,
        items: 1,
        loop: true,
        stagePadding: 0,
        margin: 0,
        smartSpeed: 1500,
        autoplay: true,
        pauseOnHover: false,
        dots: true,
        nav: true,
        navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
    });

	
});



(function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel-members").owlCarousel({
      loop: true,
      autoplay:true,
      center: true,
      margin: 4,
      responsiveClass: true,
      nav: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        680: {
          items: 2,
          nav: false,
          loop: false
        },
        1000: {
          items: 3,
          nav: false
        }
      }
    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();

(function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel1").owlCarousel({
      loop: true,
      autoplay:true,
      center: true,
      margin: 4,
      responsiveClass: true,
      nav: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        680: {
          items: 2,
          nav: false,
          loop: false
        },
        1000: {
          items: 3,
          nav: false
        }
      }
    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();



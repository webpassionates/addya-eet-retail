$(document).ready(function() {
    var owl = $(".events-carousel");

    owl.owlCarousel({
      stagePadding: 150,
      loop: true,
      margin: 10,
      autoplay: false,
      dots: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 1
        }
      }
    });

    // Next button click event
    $(".next-btn").click(function() {
      owl.trigger('next.owl.carousel');
    });

    // Prev button click event
    $(".prev-btn").click(function() {
      owl.trigger('prev.owl.carousel');
    });
  });
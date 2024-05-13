$(document).ready(function() {
    var owl = $(".events-carousel");

    owl.owlCarousel({
      stagePadding: 125,
      loop: true,
      margin: 10,
      autoplay: true,
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
  
//accordian start//
$(document).ready(function(){
  $('.accordion__item input[type="checkbox"]').on('change', function(){
      // Close all other accordions
      $('.accordion__item input[type="checkbox"]').not(this).prop('checked', true);
  });
});
//accordian end//

// For Dealer Page Testomonials

$(document).ready(function() {
    
  var owl = $(".events-carousel");

  owl.owlCarousel({
      loop: true,
      margin: 10,
      autoplay: true,
      dots: false,
      autoplayTimeout:8000,
      responsive: {
          0: {
              items: 1,
              stagePadding: 0 
          },
          480: {
              items: 1,
              stagePadding: 0
          },
          600: {
              items: 1, 
              stagePadding: 50 
          },
          1000: {
              items: 1,
              stagePadding: 125 
          }
      }
  });

  // Next button 
  $(".next-btn").click(function() {
      owl.trigger('next.owl.carousel');
  });

  // Prev button
  $(".prev-btn").click(function() {
      owl.trigger('prev.owl.carousel');
  });
});

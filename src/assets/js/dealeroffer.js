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
// $(document).ready(function(){
//   $('.accordion__item input[type="checkbox"]').on('change', function(){
//       // Close all other accordions
//       $('.accordion__item input[type="checkbox"]').not(this).prop('checked', true);
//   });
// });

$(document).ready(function(){
  // Set initial rotation to 315 degrees for all arrows
  $('.accordion__item input[type="checkbox"]').each(function() {
    $(this).siblings('.border-btn').find('.fa-arrow-left').css('transform', 'rotate(315deg)');
  });
  // Check if the checkbox of the first accordion item is initially checked
  var firstAccordionCheckbox = $('.accordion__item input[type="checkbox"]:first');
  if (firstAccordionCheckbox.is(':checked')) {
    // Rotate the left arrow icon to 360 degrees for the first accordion item when it's open
    firstAccordionCheckbox.siblings('.border-btn').find('.fa-arrow-left').css('transform', 'rotate(45deg)');
  }
  // Toggle rotation and close previously opened accordion when checkbox is changed
  $('.accordion__item input[type="checkbox"]').on('change', function(){
    var isChecked = $(this).is(':checked');
    // Reset rotation for all arrows
    $('.accordion__item input[type="checkbox"]').each(function() {
      $(this).siblings('.border-btn').find('.fa-arrow-left').css('transform', 'rotate(315deg)');
    });
    // Close all other accordions
    $('.accordion__item input[type="checkbox"]').not(this).prop('checked', false);
    // Rotate the arrow for the current accordion item
    if (isChecked) {
      $(this).siblings('.border-btn').find('.fa-arrow-left').css('transform', 'rotate(45deg)');
    }
  });
});

//accordian end//
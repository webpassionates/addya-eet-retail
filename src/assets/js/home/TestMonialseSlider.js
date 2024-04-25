
$(document).ready(function() {
    $('.carousel').flickity({
        wrapAround: true, 
        pageDots: false,
        // draggable: false, 
        contain: true,
        autoPlay: true, 
        prevNextButtons: false 
      });
  
    // Add event listeners for previous and next buttons
    $('.next-btn').click(function() {
      $('.carousel').flickity('next');
    });
  
    $('.prev-btn').click(function() {
      $('.carousel').flickity('previous');
    });
  });
  




// $(document).ready(function() {
//   var $carousel = $('.carousel').flickity({
//     wrapAround: true, 
//     pageDots: false,
//     contain: true,
//     autoPlay: 5000, // Adjust the interval time as needed
//     prevNextButtons: false 
//   });

//   // Function to reset carousel to first slide when it reaches the end
//   function resetCarousel() {
//     var flkty = $carousel.data('flickity');
//     var selectedIndex = flkty.selectedIndex;
//     if (selectedIndex === flkty.slides.length - 1) {
//       // Reset to the first slide after a delay
//       setTimeout(function() {
//         $carousel.flickity('select', 0);
//       }, 100); // Adjust the delay time as needed
//     }
//   }

//   // Add event listener for when the carousel is settled after sliding
//   $carousel.on('settle.flickity', resetCarousel);

//   // Function to start autoplay when the document is ready
//   function startAutoplay() {
//     $carousel.flickity('playPlayer');
//   }

//   // Call the function to start autoplay
//   startAutoplay();
// });

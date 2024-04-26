

// FOr NAvbar DropDown
// j querry 

$(document).ready(function() {
    var dropdownToggle = $('.dropdown-toggle');
    var dropdownMenu = $('.dropdown-menu');

    if (dropdownToggle.length && dropdownMenu.length) {
        dropdownToggle.on('click', function() {
            // console.log('Dropdown toggle clicked');
            dropdownMenu.toggleClass('show');
            $('.arrow').toggleClass('rotate');
            // console.log('Dropdown menu toggled:', dropdownMenu.hasClass('show'));
        });

        // Close dropdown when clicking outside
        $(document).on('click', function(e) {
            if (!dropdownToggle.is(e.target) && dropdownToggle.has(e.target).length === 0) {
                // console.log('Clicked outside dropdown toggle');
                dropdownMenu.removeClass('show');
                $('.arrow').removeClass('rotate');
                // console.log('Dropdown menu closed');
            }
        });
    } else {
        console.error('Dropdown error');
    }
});

// HEader imaeg   chaneg  into 5sec

// $(document).ready(function() {
//     setTimeout(function() {
//       $('.background').addClass('second-image'); // Add class to transition to the second image
//     }, 5000); // 5000 milliseconds = 5 seconds
//   });


// for the  button silder js explore offer of the  Button  Slider

$(document).ready(function(){
    $('.slider').slick({
      arrows: false,
      dots: false,
      infinite: true,
      speed: 500,
      fade: false,
      cssEase: 'linear',
    });

    $('.prev').click(function(){
      $('.slider').slick('slickPrev');
    });

    $('.next').click(function(){
      $('.slider').slick('slickNext');
    });
  });



  // Hompage section one

document.addEventListener("DOMContentLoaded", function() {
  const slides = document.querySelectorAll('.slide');

  // Function to start the slideshow
  function startSlideshow() {
    slides[0].style.opacity = 1; // Show the first slide initially

    // Start the slideshow interval
    setInterval(() => {
      slides[0].style.opacity = 0; // Hide the first slide
      slides[1].style.opacity = 1; // Show the second slide after 5 seconds
      setTimeout(() => {
        slides[1].style.opacity = 0; // Hide the second slide after 5 seconds
        slides[0].style.opacity = 1; // Show the first slide again
      }, 15000);
    }, 10000); // Change slide every 10 seconds (adjust as needed)
  }

  // Start the slideshow
  startSlideshow();
});


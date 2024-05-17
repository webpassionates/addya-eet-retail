

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





document.addEventListener('DOMContentLoaded', function() {
  var submenuToggles = document.querySelectorAll('#top-header .topheader .navbar .nav-item > a');
  // console.log("submenuToggles : ", submenuToggles);
  submenuToggles.forEach(function(toggle) {
    toggle.addEventListener('click', function() {
      var submenu = this.parentNode.querySelector('.dropdown-menu');
      if (submenu.style.display === 'block') {
        submenu.style.display = 'none';
      } else {
        submenu.style.display = 'block';
      }
    });
  });
});
// HEader imaeg   chaneg  into 5sec

// $(document).ready(function() {
//     setTimeout(function() {
//       $('.background').addClass('second-image'); // Add class to transition to the second image
//     }, 5000); // 5000 milliseconds = 5 seconds
//   });


// for the  button silder js explore offer of the  Button  Slider

// $(document).ready(function(){
//     $('.slider').slick({
//       arrows: false,
//       dots: false,
//       infinite: true,
//       speed: 500,
//       fade: true,
//       cssEase: 'linear',
//       autoplay:'true',
//       autoplaySpeed: 3000,
//     });

//     $('.prev').click(function(){
//       $('.slider').slick('slickPrev');
//     });

//     $('.next').click(function(){
//       $('.slider').slick('slickNext');
//     });
//   });

// $(document).ready(function(){
//   $('.slider').slick({
//     arrows: false,
//     dots: false,
//     infinite: true,
//     speed: 500,
//     fade: true,
//     cssEase: 'linear',
//     autoplay: true,
//     autoplaySpeed: 5000,
//   });
//   $('.prev').click(function(){
//     $('.slider').slick('slickPrev');
//     $('.prev').addClass('active');
//     $('.next').removeClass('active');
//   });
//   $('.next').click(function(){
//     $('.slider').slick('slickNext');
//     $('.next').addClass('active');
//     $('.prev').removeClass('active');
//   });
//   $('.slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
//     if (nextSlide === 0) {
//       $('.prev').addClass('active');
//       $('.next').removeClass('active');
//     } else {
//       $('.next').addClass('active');
//       $('.prev').removeClass('active');
//     }
//   });
// });


$(document).ready(function(){
  /* $('.slider').slick({
    arrows: false,
    dots: false,
    infinite: true,
    speed: 1000,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 5000,
  }); */

  $('.slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    fade: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 8000,
    //asNavFor: '.slider-nav',
    accessibility: false,
    nextArrow: '.slider-nav .next',
    prevArrow: '.slider-nav .prev'
  });

  /* $('.slider-nav').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    centerMode: true,
    centerPadding: '15px',
    focusOnSelect: true,
    /* vertical: true,
    verticalSwiping: true, /
    asNavFor: '.slider',
  }); */

  $('.prev').click(function(){
    //$('.slider').slick('slickPrev');
    $('.prev').addClass('active');
    $('.next').removeClass('active');
    slideBgToLeft();
  });

  $('.next').click(function(){
    //$('.slider').slick('slickNext');
    $('.next').addClass('active');
    $('.prev').removeClass('active');
    slideBgToRight();
  });

  $('.slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    if (nextSlide === 0) {
      $('.prev').addClass('active');
      $('.next').removeClass('active');
      slideBgToLeft();
    } else {
      $('.next').addClass('active');
      $('.prev').removeClass('active');
      slideBgToRight();
    }
  });

  function slideBgToLeft() {
    $('.slider-nav').stop().animate({
      'background-position-x': '0%'
    }, 500);
  }

  function slideBgToRight() {
    $('.slider-nav').stop().animate({
      'background-position-x': '100%'
    }, 1000);
  }
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



// document.addEventListener("DOMContentLoaded", function() {
//   const slides = document.querySelectorAll('.slide');
//   let currentSlideIndex = 0;

//   // Function to start the slideshow
//   function startSlideshow() {
//     slides[currentSlideIndex].style.opacity = 1; // Show the first slide initially

//     // Start the slideshow interval
//     setInterval(() => {
//       slides[currentSlideIndex].style.opacity = 0; // Hide the current slide
//       slides[currentSlideIndex].style.transform = 'scale(1.1)'; // Scale out the current slide

//       // Move to the next slide
//       currentSlideIndex = (currentSlideIndex + 1) % slides.length;

//       setTimeout(() => {
//         slides[currentSlideIndex].style.opacity = 1; // Show the next slide after hiding the current one
//         slides[currentSlideIndex].style.transform = 'scale(1)'; // Scale in the next slide
//       }, 1000); // Adjust this delay to match the transition timing in CSS
//     }, 10000); // Change slide every 10 seconds (adjust as needed)
//   }

//   // Start the slideshow
//   startSlideshow();
// });


//hero slider start// 
    'use strict';
    jQuery(function ($) {
      var el, set, timeRemain, sliderContinue;
      // App
      var Application = {
        settings: {
          sliderAutoplaySpeed: 5000,
          sliderSpeed: 1500,
          zoomFactor: 1.1 // Adjust the zoom factor as needed
        },
        elements: {
          slider: $('#slick'),
          slickAllThumbs: $('.slick-dots button'),
          slickActiveThumb: $('.slick-dots .slick-active button'),
        },
        init: function () {
          set = this.settings;
          el = this.elements;
          this.slider();
        },
        /**
         * Slider
         */
        slider: function () {
          el.slider.on('init', function () {
            $(this).find('.slick-dots button').text('');
            Application.dotsAnimation();
          });
          // On before slide change
          el.slider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
            console.log("Current Slide: " + currentSlide);
            console.log("Next Slide: " + nextSlide);
            el.slider.find('.slide1').removeClass("slide-init");
          });
          el.slider.slick({
            arrows: false,
            dots: false,
            autoplay: true,
            autoplaySpeed: set.sliderAutoplaySpeed,
            fade: true,
            speed: set.sliderSpeed,
            pauseOnHover: false,
            pauseOnDotsHover: false,
            prevArrow: '<button class="PrevArrow slick-arrow"></button>',
            nextArrow: '<button class="NextArrow slick-arrow"></button>',
          });
          $('.slick-dots').hover(
            function () {
              var trackWidth = $('.slick-dots .slick-active button').width();
              $('.slick-dots .slick-active button').stop().width(trackWidth);
              el.slider.slick('slickPause');
              clearTimeout(sliderContinue);
            },
            function () {
              Application.dotsAnimation(timeRemain);
              var trackWidth = $('.slick-dots .slick-active button').width();
              sliderContinue = setTimeout(function () {
                el.slider.slick('slickNext');
                el.slider.slick('slickPlay');
              }, timeRemain);
            }
          );
          el.slider.on('beforeChange', function () {
            $('.slick-dots button').stop().width(0);
          });
          el.slider.on('afterChange', function () {
            $('.slick-dots button').width(0);
            Application.dotsAnimation();
          });
        },
        /**
         *
         * @param remain {number}
         */
        dotsAnimation: function (remain) {
          if (remain) {
            var newDuration = remain;
          } else {
            var newDuration = set.sliderAutoplaySpeed;
          }
          $('.slick-dots .slick-active button').animate({ width: '100%' },
            {
              duration: newDuration,
              easing: 'linear',
              step: function (now, fx) {
                var timeCurrent = Math.round((now * set.sliderAutoplaySpeed) / 100);
                timeRemain = set.sliderAutoplaySpeed - timeCurrent;
              }
            }
          );
        },
      };
      //Init
      Application.init();
      $(window).load(function () {
        $('.slick-slide .img--holder').height($(window).height());
        $('.slick-slide.slide1').addClass("slide-init");
        setTimeout(function () { $('.slick-slide.slide1').removeClass("slide-init"); }, 1);
      });
      $(window).resize(function () {
        $('.slick-slide .img--holder').height($(window).height());
      });
    }); 
//hero slider end//
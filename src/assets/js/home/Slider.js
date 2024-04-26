
// Slider SEction code

let currentIndex = 0;
const slides = $('.slide');
const slideCount = slides.length;

function nextSlide() {
  currentIndex = (currentIndex + 1) % slideCount;
  const offset = -currentIndex * 100;
  $('.slider-container').css('transform', `translateX(${offset}%)`);
}

setInterval(nextSlide, 1000);


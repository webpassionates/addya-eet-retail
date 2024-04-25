// let currentIndex = 0;
// const slides = document.querySelectorAll('.slide');
// const slideCount = slides.length;

// function nextSlide() {
//   currentIndex = (currentIndex + 1) % slideCount;
//   const offset = -currentIndex * 100;
//   document.querySelector('.slider-container').style.transform = `translateX(${offset}%)`;
// }

// setInterval(nextSlide, 1000);


// // FOR Loan Agree  Js Code

// const box = document.getElementById('box');
// const arrow = document.getElementById('arrow');

// box.addEventListener('mouseover', () => {
//   arrow.style.display = 'block'; 
// });

// box.addEventListener('mouseleave', () => {
//   arrow.style.display = 'none'; 
// });






let currentIndex = 0;
const slides = $('.slide');
const slideCount = slides.length;

function nextSlide() {
  currentIndex = (currentIndex + 1) % slideCount;
  const offset = -currentIndex * 100;
  $('.slider-container').css('transform', `translateX(${offset}%)`);
}

setInterval(nextSlide, 1000);


// // FOR Loan Agree  Js Code

// jQuery for Loan Agreement
$('#box').hover(
  function() {
    $('#arrow').css('display', 'block');
  },
  function() {
    $('#arrow').css('display', 'none');
  }
);



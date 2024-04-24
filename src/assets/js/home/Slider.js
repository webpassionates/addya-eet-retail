// This script will automatically slide the images every 3 seconds
let currentIndex = 0;
const slides = document.querySelectorAll('.slide');
const slideCount = slides.length;

function nextSlide() {
  currentIndex = (currentIndex + 1) % slideCount;
  const offset = -currentIndex * 100;
  document.querySelector('.slider-container').style.transform = `translateX(${offset}%)`;
}

setInterval(nextSlide, 1000);


// FOR Loan Agree  Js Code

const box = document.getElementById('box');
const arrow = document.getElementById('arrow');

box.addEventListener('mouseover', () => {
  arrow.style.display = 'block'; 
});

box.addEventListener('mouseleave', () => {
  arrow.style.display = 'none'; 
});


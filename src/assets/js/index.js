//const $ = require('jquery');
$(document).ready(function() {
    // jQuery code here
    // console.log("Welcome to index.js for EET");
  });



  document.addEventListener('DOMContentLoaded', function () {
    const hamburgerBtn = document.querySelector('.hamburger-btn');
    const mediaSection = document.getElementById('media-section');
  
    hamburgerBtn.addEventListener('click', function () {
      mediaSection.classList.toggle('open');
    });
  });
  
var hamburger = document.querySelector('.hamburger');
var navList = document.querySelector('.nav-list');
var nav = document.querySelector('.navbar');

hamburger.addEventListener('click', function() {
  navList.classList.toggle('nav-open');

});
//Swiper slider
var swiper = new Swiper(".bg-slider-thumbs", {
    loop: true,
    spaceBetween: 0,
    slidesPerView: 0,
});
var swiper2 = new Swiper(".bg-slider", {
    loop: true,
    spaceBetween: 0,
    thumbs: {
        swiper: swiper,
    },
});
const dropdown = document.querySelector('.dropdown');
const dropdownContent = dropdown.querySelector('.dropdown-content');

dropdown.addEventListener('click', function() {
  dropdownContent.classList.toggle('show');
});

window.addEventListener('click', function(event) {
  if (!event.target.matches('.dropbtn')) {
    dropdownContent.classList.remove('show');
  }
});

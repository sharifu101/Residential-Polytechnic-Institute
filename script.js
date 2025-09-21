const menuToggle = document.querySelector('.menu-toggle');
const navLinks = document.querySelector('.nav-links');

menuToggle.addEventListener('click', () => {
  navLinks.classList.toggle('active');
});



// testimonial 

const slider = document.querySelector('.testimonial-slider');
let scrollAmount = 0;

function autoSlide() {
  const maxScroll = slider.scrollWidth - slider.clientWidth;
  scrollAmount += 1; // speed
  if (scrollAmount >= maxScroll) {
    scrollAmount = 0; // reset to start
  }
  slider.scrollLeft = scrollAmount;
  requestAnimationFrame(autoSlide);
}

autoSlide();





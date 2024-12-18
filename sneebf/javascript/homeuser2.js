const totalSlides = document.querySelectorAll('.slide').length;
const navButtons = document.querySelectorAll('.nav-btn');
const infoSlider = document.getElementById('slide-info');

const currentSlideColor = "red";

function goToSlide(index) {
  const slider = document.querySelector('.fill-slider');
  currentSlide = index;

  slider.style.transform = `translateX(-${index * 100}%)`;

  const currentSlideNumber = String(index + 1).padStart(2, '0');
  const totalSlidesNumber = String(totalSlides).padStart(2, '0');
  
  infoSlider.innerHTML = `<span class="current-slide" style="color: ${currentSlideColor}">${currentSlideNumber}</span>/${totalSlidesNumber}`;

  navButtons.forEach((btn, btnIndex) => {
    if (btnIndex === index) {
      btn.classList.add('active');
    } else {
      btn.classList.remove('active');
    }
  });
}

goToSlide(0);   

setInterval(() => {
  currentSlide = (currentSlide + 1) % totalSlides;
  goToSlide(currentSlide);
}, 3000);


document.querySelector('.button-video-media').addEventListener('click', function () {
  const wrapper = document.querySelector('.wrapper-media');
  const mediaVideo = document.querySelector('.media-video');
  const vidMed = document.querySelector('.video-media');
const backcharAu = document.querySelector('.background-char-media-audio');
const roAudio = document.querySelector('.rotate-audio');
const butAudio = document.querySelector('.button-audio-media');

  // Move the wrapper
  wrapper.classList.toggle('translate'); // Toggle translate class for the wrapper
backcharAu.classList.toggle('display');
roAudio.classList.toggle('display');
butAudio.classList.toggle('disable');
vidMed.classList.toggle('display');

  // Show the media-video with animation
  if (!mediaVideo.classList.contains('visible')) {
      mediaVideo.style.display = 'block'; // Ensure it's part of the DOM
      setTimeout(() => {
          mediaVideo.classList.add('visible'); // Add the visible class with delay for animation
      }, 10); // Small delay to allow the transition to work
  } else {
      mediaVideo.classList.remove('visible'); // Remove the visible class to hide
      setTimeout(() => {
          mediaVideo.style.display = 'none'; // Hide after animation completes
      }, 500); // Match the transition duration in CSS
  }
});

const slides = document.querySelectorAll('.video-media a');
let currentIndex = 0;

function updateSlides() {
    // Remove 'active' class from all slides
    slides.forEach((slide) => slide.classList.remove('active'));

    // Add 'active' class to the current slide
    slides[currentIndex].classList.add('active');

    // Update index for the next slide
    currentIndex = (currentIndex + 1) % slides.length;
}

// Initialize first slide as active
updateSlides();

// Set interval to change slides every 3 seconds
setInterval(updateSlides, 3000);





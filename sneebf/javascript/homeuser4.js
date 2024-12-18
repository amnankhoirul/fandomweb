// document.addEventListener("DOMContentLoaded", () => {
//     const wrapperData = document.querySelector(".wrapper-data");
//     const slideData = document.querySelectorAll(".slide-data");
//     const totalSlides = slideData.length;
//     let currentIndex = 0;
  
//     // Target all the data elements
//     const backgroundData = document.querySelectorAll(".background-data");
//     const charData = document.querySelectorAll(".char-data");
//     const introData = document.querySelectorAll(".intro-data");
//     const nameData = document.querySelectorAll(".name-data");
//     const cvIntroData = document.querySelectorAll(".cv-intro-data");
//     const cvData = document.querySelectorAll(".cv-data");
//     const numbersData = document.querySelectorAll(".numbers-data");
//     const troopsData = document.querySelectorAll(".troops-data");
//     const typeData = document.querySelectorAll(".type-data");
  
//     // Add transition classes to the elements
//     function transitionToNextSlide() {
//       // Remove animation classes from all elements (reset them)
//       slideData.forEach((slide) => slide.classList.remove("fade-in-slide", "fade-out-slide"));
//       backgroundData.forEach((bg) => bg.classList.remove("fade-bg-in", "fade-bg-out"));
//       charData.forEach((char) => char.classList.remove("fade-and-slide-in", "fade-and-slide-out"));
//       introData.forEach((intro) => intro.classList.remove("fade-in-intro", "fade-out-intro"));
//       nameData.forEach((name) => name.classList.remove("fade-in-name", "fade-out-name"));
//       cvIntroData.forEach((cvIntro) => cvIntro.classList.remove("fade-in-cv-intro", "fade-out-cv-intro"));
//       cvData.forEach((cv) => cv.classList.remove("fade-in-cv", "fade-out-cv"));
//       numbersData.forEach((number) => number.classList.remove("fade-in-numbers", "fade-out-numbers"));
//       troopsData.forEach((troops) => troops.classList.remove("fade-in-troops", "fade-out-troops"));
//       typeData.forEach((type) => type.classList.remove("fade-in-type", "fade-out-type"));
  
//       // Add fade-out animation to current elements
//       const currentSlide = slideData[currentIndex];
//       const currentChar = charData[currentIndex];
//       const currentIntro = introData[currentIndex];
//       const currentName = nameData[currentIndex];
//       const currentCvIntro = cvIntroData[currentIndex];
//       const currentCv = cvData[currentIndex];
//       const currentNumbers = numbersData[currentIndex];
//       const currentTroops = troopsData[currentIndex];
//       const currentType = typeData[currentIndex];
      
//       currentSlide.classList.add("fade-out-slide");
//       currentChar.classList.add("fade-and-slide-out");
//       currentIntro.classList.add("fade-out-intro");
//       currentName.classList.add("fade-out-name");
//       currentCvIntro.classList.add("fade-out-cv-intro");
//       currentCv.classList.add("fade-out-cv");
//       currentNumbers.classList.add("fade-out-numbers");
//       currentTroops.classList.add("fade-out-troops");
//       currentType.classList.add("fade-out-type");
  
//       // Move to the next slide
//       currentIndex++;
//       if (currentIndex >= totalSlides) {
//         currentIndex = 0; // Reset to first slide after the last one
//       }
  
//       // Add fade-in animation to the next slide
//       const nextSlide = slideData[currentIndex];
//       const nextChar = charData[currentIndex];
//       const nextIntro = introData[currentIndex];
//       const nextName = nameData[currentIndex];
//       const nextCvIntro = cvIntroData[currentIndex];
//       const nextCv = cvData[currentIndex];
//       const nextNumbers = numbersData[currentIndex];
//       const nextTroops = troopsData[currentIndex];
//       const nextType = typeData[currentIndex];
  
//       nextSlide.classList.add("fade-in-slide");
//       nextChar.classList.add("fade-and-slide-in");
//       nextIntro.classList.add("fade-in-intro");
//       nextName.classList.add("fade-in-name");
//       nextCvIntro.classList.add("fade-in-cv-intro");
//       nextCv.classList.add("fade-in-cv");
//       nextNumbers.classList.add("fade-in-numbers");
//       nextTroops.classList.add("fade-in-troops");
//       nextType.classList.add("fade-in-type");
//     }
  
//     // Auto-slide every 3 seconds
//     setInterval(transitionToNextSlide, 7000);
  
//     // Trigger the initial animation for the first slide
//     slideData[0].classList.add("fade-in-slide");
//     charData[0].classList.add("fade-and-slide-in");
//     introData[0].classList.add("fade-in-intro");
//     nameData[0].classList.add("fade-in-name");
//     cvIntroData[0].classList.add("fade-in-cv-intro");
//     cvData[0].classList.add("fade-in-cv");
//     numbersData[0].classList.add("fade-in-numbers");
//     troopsData[0].classList.add("fade-in-troops");
//     typeData[0].classList.add("fade-in-type");
//   });
  

// // document.addEventListener("DOMContentLoaded", () => {
// //     const wrapperData = document.querySelector(".wrapper-data");
// //     const slideData = document.querySelectorAll(".slide-data");
// //     const totalSlides = slideData.length;
// //     let currentIndex = 0;
  
// //     // Target all the data elements
// //     const backgroundData = document.querySelectorAll(".background-data");
// //     const charData = document.querySelectorAll(".char-data");
// //     const introData = document.querySelectorAll(".intro-data");
// //     const nameData = document.querySelectorAll(".name-data");
// //     const cvIntroData = document.querySelectorAll(".cv-intro-data");
// //     const cvData = document.querySelectorAll(".cv-data");
// //     const numbersData = document.querySelectorAll(".numbers-data");
// //     const troopsData = document.querySelectorAll(".troops-data");
// //     const typeData = document.querySelectorAll(".type-data");
  
// //     // Add transition classes to the elements
// //     function transitionToNextSlide() {
// //       // Remove animation classes from all elements
// //       slideData.forEach((slide) => slide.classList.remove("fade-in-slide", "fade-out-slide"));
// //       backgroundData.forEach((bg) => bg.classList.remove("fade-bg-in", "fade-bg-out"));
// //       charData.forEach((char) => char.classList.remove("fade-and-slide-in", "fade-and-slide-out"));
// //       introData.forEach((intro) => intro.classList.remove("fade-and-slide-in-intro"));
// //       nameData.forEach((name) => name.classList.remove("fade-in-name"));
// //       cvIntroData.forEach((cvIntro) => cvIntro.classList.remove("fade-in-cv-intro"));
// //       cvData.forEach((cv) => cv.classList.remove("fade-in-cv"));
// //       numbersData.forEach((number) => number.classList.remove("fade-in-numbers"));
// //       troopsData.forEach((troops) => troops.classList.remove("fade-in-troops"));
// //       typeData.forEach((type) => type.classList.remove("fade-in-type"));
  
// //       // Add fade-out animation to current elements
// //       const currentSlide = slideData[currentIndex];
// //       const currentChar = charData[currentIndex];
// //       const currentIntro = introData[currentIndex];
// //       const currentName = nameData[currentIndex];
// //       const currentCvIntro = cvIntroData[currentIndex];
// //       const currentCv = cvData[currentIndex];
// //       const currentNumbers = numbersData[currentIndex];
// //       const currentTroops = troopsData[currentIndex];
// //       const currentType = typeData[currentIndex];
      
// //       currentSlide.classList.add("fade-out-slide");
// //       currentChar.classList.add("fade-and-slide-out");
// //       currentIntro.classList.add("fade-out-intro");
// //       currentName.classList.add("fade-out-name");
// //       currentCvIntro.classList.add("fade-out-cv-intro");
// //       currentCv.classList.add("fade-out-cv");
// //       currentNumbers.classList.add("fade-out-numbers");
// //       currentTroops.classList.add("fade-out-troops");
// //       currentType.classList.add("fade-out-type");
  
// //       // Move to the next slide
// //       currentIndex++;
// //       if (currentIndex >= totalSlides) {
// //         currentIndex = 0; // Reset to first slide after the last one
// //       }
  
// //       // Add fade-in animation to the next slide
// //       const nextSlide = slideData[currentIndex];
// //       const nextChar = charData[currentIndex];
// //       const nextIntro = introData[currentIndex];
// //       const nextName = nameData[currentIndex];
// //       const nextCvIntro = cvIntroData[currentIndex];
// //       const nextCv = cvData[currentIndex];
// //       const nextNumbers = numbersData[currentIndex];
// //       const nextTroops = troopsData[currentIndex];
// //       const nextType = typeData[currentIndex];
  
// //       nextSlide.classList.add("fade-in-slide");
// //       nextChar.classList.add("fade-and-slide-in");
// //       nextIntro.classList.add("fade-in-intro");
// //       nextName.classList.add("fade-in-name");
// //       nextCvIntro.classList.add("fade-in-cv-intro");
// //       nextCv.classList.add("fade-in-cv");
// //       nextNumbers.classList.add("fade-in-numbers");
// //       nextTroops.classList.add("fade-in-troops");
// //       nextType.classList.add("fade-in-type");
// //     }
  
// //     // Auto-slide every 3 seconds
// //     setInterval(transitionToNextSlide, 7000);
  
// //     // Trigger the initial animation for the first slide
// //     slideData[0].classList.add("fade-in-slide");
// //     charData[0].classList.add("fade-and-slide-in");
// //     introData[0].classList.add("fade-in-intro");
// //     nameData[0].classList.add("fade-in-name");
// //     cvIntroData[0].classList.add("fade-in-cv-intro");
// //     cvData[0].classList.add("fade-in-cv");
// //     numbersData[0].classList.add("fade-in-numbers");
// //     troopsData[0].classList.add("fade-in-troops");
// //     typeData[0].classList.add("fade-in-type");
// //   });
  





document.addEventListener("DOMContentLoaded", () => {
    const slideData = document.querySelectorAll(".slide-data");
    const totalSlides = slideData.length;
    const linkData = document.querySelector(".link-data");
    const charData = document.querySelectorAll(".char-data");
    const introData = document.querySelectorAll(".intro-data");
    const cvData = document.querySelectorAll(".cv-data");
    const cvIntro = document.querySelectorAll(".cv-intro-data");
    const numbersData = document.querySelectorAll(".numbers-data");
    const troopsData = document.querySelectorAll(".troops-data");
    const typeData = document.querySelectorAll(".type-data");
    const nameData = document.querySelectorAll(".name-data");
  
    let currentIndex = 0;
    let autoSlideInterval;
  
    // Function to start auto-slide
    function startAutoSlide() {
      autoSlideInterval = setInterval(() => {
        const nextIndex = (currentIndex + 1) % totalSlides;
        transitionToSlide(nextIndex);
      }, 7000);
    }
  
    // Function to reset auto-slide
    function resetAutoSlide() {
      clearInterval(autoSlideInterval);
      startAutoSlide();
    }
  
    // Reset animations for all elements
    function resetAnimations() {
      slideData.forEach((slide) => slide.classList.remove("fade-in-slide", "fade-out-slide"));
      charData.forEach((char) => char.classList.remove("fade-and-slide-in", "fade-and-slide-out"));
      introData.forEach((intro) => intro.classList.remove("fade-in-intro", "fade-out-intro"));
      cvData.forEach((cv) => cv.classList.remove("fade-in-cv", "fade-out-cv"));
      numbersData.forEach((num) => num.classList.remove("fade-in-numbers", "fade-out-numbers"));
      troopsData.forEach((troops) => troops.classList.remove("fade-in-troops", "fade-out-troops"));
      typeData.forEach((type) => type.classList.remove("fade-in-type", "fade-out-type"));
      nameData.forEach((name) => name.classList.remove("fade-in-name", "fade-out-name"));
      cvIntro.forEach((cvIntro) => cvIntro.classList.remove("fade-in-cv-intro", "fade-out-cv-intro"));
    }
  
    // Apply animations to a specific slide
    function applyAnimations(index) {
      slideData[index].classList.add("fade-in-slide");
      charData[index].classList.add("fade-and-slide-in");
      introData[index].classList.add("fade-in-intro");
      cvData[index].classList.add("fade-in-cv");
      cvIntro[index].classList.add("fade-in-cv-intro");
      numbersData[index].classList.add("fade-in-numbers");
      troopsData[index].classList.add("fade-in-troops");
      typeData[index].classList.add("fade-in-type");
      nameData[index].classList.add("fade-in-name");
    }
  
    // Transition to a specific slide
    function transitionToSlide(index) {
      // Reset all animations and buttons
      resetAnimations();
  
      const buttons = linkData.querySelectorAll(".slide-button");
      buttons.forEach((button) => button.classList.remove("active"));
  
      // Trigger animations for the target slide
      applyAnimations(index);
  
      // Update the active button
      buttons[index].classList.add("active");
  
      // Update the current index
      currentIndex = index;
    }
  
    // Setup click listeners for buttons
    const buttons = linkData.querySelectorAll(".slide-button");
    buttons.forEach((button, index) => {
      button.addEventListener("click", () => {
        transitionToSlide(index);
        resetAutoSlide(); // Reset auto-slide timer
      });
    });
  
    // Initialize the first slide
    transitionToSlide(0);
    startAutoSlide(); // Start auto-slide
  });
  

 


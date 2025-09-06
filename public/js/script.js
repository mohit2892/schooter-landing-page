
  const slider = document.getElementById('testimonial-slider');
  const dots = document.querySelectorAll('.dot');

  let currentIndex = 0;
  const totalSlides = dots.length;

  function updateSlider() {
    // Move the slider
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;

    // Update dots
    dots.forEach((dot, idx) => {
      dot.style.opacity = idx === currentIndex ? '1' : '0.5';

      if (idx === currentIndex) {
        dot.classList.remove('bg-black');
        dot.classList.add('bg-green-500');
      } else {
        dot.classList.remove('bg-green-500');
        dot.classList.add('bg-black');
      }
    });
  }

  // Click on dots
  dots.forEach(dot => {
    dot.addEventListener('click', () => {
      currentIndex = parseInt(dot.getAttribute('data-index'));
      updateSlider();
    });
  });

  // Auto play
  setInterval(() => {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateSlider();
  }, 5000);

  // Init on load
  updateSlider();

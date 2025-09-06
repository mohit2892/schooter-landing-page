<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Electric Scooters</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap">


    @vite('resources/css/app.css')
    </head>
    <body class="font-sans antialiased bg-white">
      
    @yield('content')
    </body>
    </section>

<script>
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
</script>


</html>




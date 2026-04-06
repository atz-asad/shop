  const track = document.querySelector('.slider-track');
  const slides = document.querySelectorAll('.slide-item');
  const nextBtn = document.querySelector('.next');
  const prevBtn = document.querySelector('.prev');

  let currentIndex = 0;

  function getVisibleCount() {
    if (window.innerWidth <= 576) return 1;
    if (window.innerWidth <= 768) return 2;
    if (window.innerWidth <= 992) return 3;
    return 4;
  }

  function updateSlide() {
    const slideWidth = slides[0].clientWidth;
    track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
  }

  nextBtn.addEventListener('click', () => {
    const visibleCount = getVisibleCount();
    if (currentIndex < slides.length - visibleCount) {
      currentIndex++;
    } else {
      currentIndex = 0; // loop back
    }
    updateSlide();
  });

  prevBtn.addEventListener('click', () => {
    const visibleCount = getVisibleCount();
    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = slides.length - visibleCount; // go to last set
    }
    updateSlide();
  });

  window.addEventListener('resize', updateSlide);


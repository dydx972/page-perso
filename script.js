const track = document.querySelector('.carousel-track');
const slides = Array.from(track.children);
const nextButton = document.querySelector('.next');
const prevButton = document.querySelector('.prev');
const slideWidth = slides[0].getBoundingClientRect().width;

// Arrange slides next to one another
slides.forEach((slide, index) => {
  slide.style.left = slideWidth * index + 'px';
});

let currentIndex = 0;

nextButton.addEventListener('click', () => {
  if (currentIndex < slides.length - 1) {
    currentIndex++;
    track.style.transform = `translateX(-${slideWidth * currentIndex}px)`;
  }
});

prevButton.addEventListener('click', () => {
  if (currentIndex > 0) {
    currentIndex--;
    track.style.transform = `translateX(-${slideWidth * currentIndex}px)`;
  }
});

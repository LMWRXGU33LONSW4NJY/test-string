const slides = document.querySelectorAll('.hero-slide');
const dots = document.querySelectorAll('.slider-dot');
let current = 0;

function showSlide(index) {
    slides.forEach((slide, i) => slide.classList.toggle('is-active', i === index));
    dots.forEach((dot, i) => dot.classList.toggle('is-active', i === index));
    current = index;
}

dots.forEach((dot, index) => {
    dot.addEventListener('click', () => showSlide(index));
});

setInterval(() => {
    const next = (current + 1) % slides.length;
    showSlide(next);
}, 4500);

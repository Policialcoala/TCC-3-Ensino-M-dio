const loginButton = document.querySelector('.login-button');
const loginSection = document.querySelector('.login-section');

loginButton.addEventListener('click', () => {
    loginSection.style.display = 'flex';
});

loginSection.addEventListener('click', (e) => {
    if (e.target === loginSection) {
        loginSection.style.display = 'none';
    }
});

const carouselInner = document.querySelector('.carousel-inner');
const carouselItems = document.querySelectorAll('.carousel-item');
const carouselControlPrev = document.querySelector('.carousel-control-  prev');
const carouselControlNext = document.querySelector('.carousel-control-next');

let currentSlide = 0;
let timer;

function startCarousel() {
    timer = setInterval(() => {
        currentSlide = (currentSlide + 1) % carouselItems.length;
        carouselItems.forEach((item, index) => {
            item.classList.toggle('active', index === currentSlide);
        });
    }, 6500);
}

function stopCarousel() {
    clearInterval(timer);
}

carouselControlPrev.addEventListener('click', () => {
    stopCarousel();
    currentSlide = (currentSlide - 1 + carouselItems.length) % carouselItems.length;
    carouselItems.forEach((item, index) => {
        item.classList.toggle('active', index === currentSlide);
    });
    startCarousel();
});

carouselControlNext.addEventListener('click', () => {
    stopCarousel();
    currentSlide = (currentSlide + 1) % carouselItems.length;
    carouselItems.forEach((item, index) => {
        item.classList.toggle('active', index === currentSlide);
    });
    startCarousel();
});

startCarousel();
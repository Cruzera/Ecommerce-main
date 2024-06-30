function anteriorCarousel(slidesId) {
    const slides = document.getElementById(slidesId);
    const carousel = document.querySelector('.carousel');
    const largura = carousel.clientWidth;
    var slide = slides.lastElementChild;
    slides.scrollLeft = 0;
    slides.prepend(slide);
    slides.scrollBy({ left: largura, behavior: 'auto' });
    slides.scrollBy({ left: -largura, behavior: 'smooth', duration: 500});
}

function proximoCarousel(slidesId) {
    const slides = document.getElementById(slidesId);
    const carousel = document.querySelector('.carousel');
    const largura = carousel.clientWidth;
    slides.scrollLeft = 0;
    slides.scrollBy({ left: largura, behavior: 'smooth', duration: 500});
    setTimeout(() => {
        var slide = slides.firstElementChild;
        slides.appendChild(slide);
        slides.scrollBy({ left: -largura, behavior: 'auto' });
    }, 500);
}
export const swiper = new Swiper(".swiper", {
    slidesPerView: 1.2,
    spaceBetween: 16,
    breakpoints: {
        640: {
            slidesPerView: 2.5,
        },
        1024: {
            slidesPerView: 3.5,
        },
    },
    loop: true,
    /* autoplay: {
        delay: 3000, // tempo em milissegundos (3 segundos)
        disableOnInteraction: false, // continua mesmo depois do usuário interagir
    } ,*/
    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

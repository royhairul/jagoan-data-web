import Swiper from "swiper";
import "swiper/swiper-bundle.css";

// Inisialisasi Swiper
document.addEventListener("DOMContentLoaded", () => {
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });
});

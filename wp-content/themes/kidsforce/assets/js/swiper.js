import Swiper from "swiper/bundle";
import "swiper/css/bundle";

const teamImageSwiper = new Swiper(".team-image-swiper", {
    effect: "cards",
    grabCursor: true,
    cardsEffect: {
        rotate: false,
        slideShadows: false
    },
    navigation: {
        prevEl: ".team .prev",
        nextEl: ".team .next"
    }
});

const teamContentSwiper = new Swiper(".team-content-swiper", {
    direction: "vertical",
    effect: "slide",
    loop: false,
    allowTouchMove: false,
});

teamImageSwiper.controller.control = teamContentSwiper;


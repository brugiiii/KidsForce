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

const circlesSwiper = new Swiper('.circles-swiper', {
    slidesPerView: 3,
    spaceBetween: 20,
    grabCursor: true,
    navigation: {
        prevEl: ".circles .prev",
        nextEl: ".circles .next"
    }
})

const reviewsSwiper = new Swiper('.reviews-swiper', {
    spaceBetween: 20,
    slidesPerView: 2,
    grabCursor: true,
    autoHeight: true,
    navigation: {
        prevEl: ".reviews .prev",
        nextEl: ".reviews .next"
    }
})


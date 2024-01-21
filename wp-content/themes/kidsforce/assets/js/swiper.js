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
    effect: "slide",
    loop: false,
    allowTouchMove: false,
    slidesPerView: "auto",
    autoHeight: true,
    breakpoints: {
        992: {
            direction: "vertical",
        }
    },
});

teamImageSwiper.controller.control = teamContentSwiper;

const circlesSwiper = new Swiper('.circles-swiper', {
    slidesPerView: 1,
    spaceBetween: 16,
    grabCursor: true,
    autoHeight: true,
    navigation: {
        prevEl: ".circles .prev",
        nextEl: ".circles .next"
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 20,
        }
    }
})

const reviewsSwiper = new Swiper('.reviews-swiper', {
    slidesPerView: 1,
    spaceBetween: 16,
    grabCursor: true,
    navigation: {
        prevEl: ".reviews .prev",
        nextEl: ".reviews .next"
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
        },
        992: {
            slidesPerView: 2,
            spaceBetween: 20,
        }
    }
})

const gallerySwiper = new Swiper('.gallery-swiper', {
    slidesPerView: 1,
    spaceBetween: 16,
    grabCursor: true,
    navigation: {
        prevEl: ".gallery .prev",
        nextEl: ".gallery .next"
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        }
    }
})

const groupsSwiper = new Swiper('.groups-swiper', {
    spaceBetween: 16,
    slidesPerView: 1,
    autoHeight: true,
    navigation: {
        prevEl: "#groups .prev",
        nextEl: "#groups .next"
    }
})

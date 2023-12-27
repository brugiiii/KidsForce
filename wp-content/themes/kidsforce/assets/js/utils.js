import throttle from "lodash.throttle";
import {WOW} from "wowjs/dist/wow.min";
// import intlTelInput from 'intl-tel-input';
// import Cleave from "cleave.js";
// import "cleave.js";
// import "cleave.js/dist/addons/cleave-phone.ua";
import refs from "./refs";

// const input = document.getElementById('phone')
//
// const iti = intlTelInput(input, {
//     utilsScript: `${params.template_directory_url}/node_modules/intl-tel-input/build/js/utils.js`,
//     preferredCountries: ['ua', 'us', 'pl', 'sk', 'gb'],
//     separateDialCode: true
// });
//
// const cleave = new Cleave(input, {
//     phone: true,
//     phoneRegionCode: iti.getSelectedCountryData().iso2,
//     delimiter: ' ',
//     blocks: [3, 3, 4],
//     numericOnly: true
// });

const {bodyEl} = refs;

const throttledHandleResize = throttle(handleResize, 200);

let currentBackdrop = null;

export const showBackdrop = (backdrop, hideOnResize = false) => {
    if (!backdrop) {
        return;
    }
    disableBodyScroll();

    backdrop.removeClass("is-hidden");
    backdrop.on("click", handleBackdropClick);
    window.on("keydown", handleKeyDown);
    currentBackdrop = backdrop;

    if (hideOnResize) {
        window.on("resize", throttledHandleResize);
    }
};

export const hideBackdrop = (backdrop) => {
    if (!backdrop) {
        return;
    }

    enableBodyScroll();

    backdrop.addClass("is-hidden");
    backdrop.removeClass("click", handleBackdropClick);
    window.off("keydown", handleKeyDown);
    window.off("resize", throttledHandleResize);

    currentBackdrop = null;
};

function handleBackdropClick(e) {
    if (e.target === e.currentTarget) {
        hideBackdrop(currentBackdrop);
    }
}

function handleKeyDown(e) {
    if (e.code === "Escape") {
        hideBackdrop(currentBackdrop);
    }
}

function handleResize() {
    const {innerWidth} = window;

    if (innerWidth >= 768) {
        hideBackdrop(currentBackdrop);
    }
}

export function enableBodyScroll() {
    bodyEl.css("overflow-y", "scroll");
}

export function disableBodyScroll() {
    bodyEl.css("overflow-y", "hidden");
}

const replaceInputWithButton = () => {
    const submitInput = $('.wpcf7-form [type="submit"]');
    const value = submitInput.val();

    submitInput.prop("outerHTML", function () {
        return this.outerHTML.replace(/input/gi, "button");
    });

    const newButton = $('.wpcf7-form [type="submit"]');
    newButton.text(value);
    newButton.attr("data-text", value);
};

$("document").ready(function () {
    bodyEl.css("visibility", "visible");

    new WOW().init();

    replaceInputWithButton();
});

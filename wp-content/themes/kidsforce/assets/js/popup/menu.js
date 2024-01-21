import {showBackdrop, hideBackdrop} from "../utils";
import refs from "../refs";

const {hamburgerButton, menuBackdrop, menuLinks} = refs;

hamburgerButton.on("click", function (){
    if(menuBackdrop.hasClass('is-hidden')){
        showBackdrop(menuBackdrop);
        window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
        });
    } else {
        hideBackdrop(menuBackdrop)
    }
});

menuLinks.on("click", () => hideBackdrop(menuBackdrop))

const observer = new MutationObserver((mutationsList, observer) => {
    for (const mutation of mutationsList) {
        if (mutation.type === "attributes" && mutation.attributeName === "class") {
            hamburgerButton.toggleClass("is-active");
        }
    }
});

observer.observe(menuBackdrop[0], { attributes: true });


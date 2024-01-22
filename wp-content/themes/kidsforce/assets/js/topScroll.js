import throttle from "lodash.throttle";

$(document).ready(() => {
    const topScrollButton = $(".top-scroll");
    const scrollThreshold = 1000;
    const scrollDuration = 250;

    const handleScroll = throttle(() => {
        const isHidden = topScrollButton.hasClass('is-hidden');
        const shouldRemoveClass = isHidden && $(window).scrollTop() >= scrollThreshold;
        const shouldAddClass = !isHidden && $(window).scrollTop() < scrollThreshold;

        shouldRemoveClass ? topScrollButton.removeClass("is-hidden") : null;
        shouldAddClass ? topScrollButton.addClass("is-hidden").removeClass("clicked") : null;
    }, 200);

    $(window).scroll(handleScroll);

    topScrollButton.on("click", () => {
        $("html, body").animate({ scrollTop: 0 }, scrollDuration);
        topScrollButton.addClass("clicked");
    });
});

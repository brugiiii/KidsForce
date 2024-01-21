$('.reviews-list__button').on("click", function () {
    const $this = $(this);
    const remainingText = $this.prev('.reviews-list__text').find('.reviews-list__remaining-words');

    remainingText.toggleClass('is-hidden');
});

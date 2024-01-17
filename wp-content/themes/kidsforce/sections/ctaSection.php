<section class="section section--padding-bottom">
    <div class="container">
        <div class="cta-wrapper d-flex bg-accent border border-black col-lg-10 mx-auto position-relative">
            <div class="cta-thumb overflow-hidden border border-black position-absolute translate-middle-y top-50">
                <?= wp_get_attachment_image(get_field('cta_image'), 'full', false, array('class' => 'cta-thumb__image')); ?>
            </div>
            <div class="cta-content w-50 ms-auto">
                <p class="cta-text">
                    <?= the_field('cta_text'); ?>
                </p>
                <form class="cta-form mx-auto">
                    <input class="form-input cta-form__input" type="text" placeholder="<?= translate_and_output('name'); ?>">
                    <input class="form-input cta-form__input" type="tel" placeholder="<?= translate_and_output('number'); ?>">
                    <button class="form-button cta-form__button border-0 mx-auto d-block" type="submit">
                        <?= translate_and_output('submit'); ?>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="section section--padding-bottom" id="cta">
    <div class="container">
        <div class="cta-wrapper d-flex bg-accent border border-black col-lg-10 mx-auto position-relative">
            <div class="cta-thumb overflow-hidden border border-black position-absolute translate-middle-y top-50">
                <?= wp_get_attachment_image(get_field('cta_image'), 'full', false, array('class' => 'cta-thumb__image')); ?>
            </div>
            <div class="cta-content w-50 ms-auto">
                <p class="cta-text">
                    <?= the_field('cta_text'); ?>
                </p>
                <form id="cta-form" class="cta-form mx-auto" action="<?php echo admin_url('admin-ajax.php'); ?>" method="post">
                    <input class="form-input cta-form__input" type="text" name="name" placeholder="<?= translate_and_output('name'); ?>">
                    <input class="form-input cta-form__input" type="tel" name="phone"
                           placeholder="<?= translate_and_output('number'); ?>">
                    <button class="form-button cta-form__button border-style mx-auto d-block" type="submit">
                        <?= translate_and_output('submit'); ?>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
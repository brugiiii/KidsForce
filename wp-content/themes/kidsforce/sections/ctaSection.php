<section class="section section--padding-bottom" id="cta">
    <div class="container">
        <div class="cta-wrapper d-flex flex-md-row bg-accent border border-black col-lg-10 mx-auto position-relative">
            <div class="cta-thumb overflow-hidden border border-black position-absolute">
                <?= wp_get_attachment_image(get_field('cta_image'), 'full', false, array('class' => 'cta-thumb__image')); ?>
            </div>
            <div class="cta-ty position-absolute text-center">
                <h2 class="ty-title cta-ty__title">
                    <?= the_field('ty_title'); ?>
                </h2>
                <p class="ty-undertitle cta-ty__undertitle mx-auto">
                    <?= the_field('ty_undertitle'); ?>
                </p>
                <p class="ty-text cta-ty__text mb-0 mx-auto">
                    <?= the_field('ty_text'); ?>
                </p>
            </div>
            <div class="cta-content align-self-end ms-auto">
                <p class="cta-text text-center">
                    <?= the_field('cta_text'); ?>
                </p>
                <div class="cta-form__wrapper position-relative">
                    <form id="cta-form" class="cta-form mx-auto"
                          action="<?php echo admin_url('admin-ajax.php'); ?>"
                          method="post">
                        <input class="form-input cta-form__input" type="text" name="name"
                               placeholder="<?= translate_and_output('name'); ?>">
                        <input class="form-input cta-form__input" type="tel" name="phone"
                               placeholder="<?= translate_and_output('number'); ?>">
                        <div hidden>
                            <input type="text" name="title">
                        </div>
                        <button class="form-button cta-form__button border-style mx-auto d-block" type="submit">
                            <?= translate_and_output('submit'); ?>
                        </button>
                    </form>
                    <?= get_template_part('templates/loader'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contacts position-relative overflow-visible">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 d-flex flex-column justify-content-between">
                <h2 class="contacts-title mb-0">
                    <?= the_field('contacts_title'); ?>
                </h2>
                <form class="contacts-form">
                    <label class="contacts-form__field w-100">
                        <span class="contacts-form__label d-block">
                            <?= translate_and_output('name'); ?>
                        </span>
                        <input class="contacts-form__input w-100" type="text">
                    </label>
                    <label class="contacts-form__field w-100">
                        <span class="contacts-form__label d-block">
                            <?= translate_and_output('number'); ?>
                        </span>
                        <input class="contacts-form__input w-100" type="tel">
                    </label>
                    <button class="contacts-form__button d-block border-0" type="submit">
                        <?= translate_and_output('send'); ?>
                    </button>
                </form>
            </div>
            <div class="col-lg-5">
                <div class="contacts-thumb overflow-hidden">
                    <?= the_field('map'); ?>
                </div>
                <div class="contacts-wrapper d-flex">
                    <?= get_template_part('templates/socialsList'); ?>
                    <?= get_template_part('templates/contactsList'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="contacts-bg position-absolute z-n1">
        <img class="object-fit-contain" src="<?= get_image('contacts-bg.svg'); ?>" alt="Background image">
    </div>
</section>
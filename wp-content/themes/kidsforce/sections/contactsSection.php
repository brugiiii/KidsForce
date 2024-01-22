<section class="contacts position-relative" id="contacts">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="contacts-content h-100 d-lg-flex flex-lg-column justify-content-lg-between">
                    <h2 class="contacts-title mb-lg-0">
                        <?= the_field('contacts_title'); ?>
                    </h2>
                    <div class="contacts-form__wrapper position-relative">
                        <form class="contacts-form position-relative">
                            <label class="contacts-form__field w-100">
                        <span class="contacts-form__label d-block">
                            <?= translate_and_output('name'); ?>
                        </span>
                                <input class="contacts-form__input w-100" type="text" name="name"
                                       placeholder="<?= translate_and_output('name'); ?>">
                            </label>
                            <label class="contacts-form__field w-100">
                            <span class="contacts-form__label d-block">
                                <?= translate_and_output('number'); ?>
                            </span>
                                <input class="contacts-form__input w-100" type="tel" name="phone"
                                       placeholder="<?= translate_and_output('number'); ?>">
                            </label>
                            <div hidden>
                                <input type="text" name="title" value="З форми зворотнього зв'язку">
                            </div>
                            <button class="contacts-form__button border-style d-block" type="submit">
                                <?= translate_and_output('send'); ?>
                            </button>
                            <?= get_template_part('templates/loader'); ?>
                        </form>
                        <div class="contacts-ty is-hidden position-absolute text-center top-0 start-0">
                            <h3 class="ty-title contacts-ty__title">
                                <?= the_field('ty_title'); ?>
                            </h3>
                            <p class="ty-undertitle contacts-ty__undertitle">
                                <?= the_field('ty_undertitle'); ?>
                            </p>
                            <p class="ty-text contacts-ty__text mx-auto">
                                <?= the_field('ty_text'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contacts-thumb overflow-hidden">
                    <?= the_field('map'); ?>
                </div>
                <div class="contacts-wrapper position-relative d-lg-flex">
                    <?= get_template_part('templates/socialsList'); ?>
                    <?= get_template_part('templates/contactsList'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="contacts-bg position-absolute z-n1">
        <img class="object-fit-contain d-none d-lg-block" src="<?= get_image('contacts-bg.svg'); ?>"
             alt="Background image">
        <img class="object-fit-contain d-lg-none" src="<?= get_image('contacts-bg-mob.svg'); ?>" alt="Background image">
    </div>
</section>
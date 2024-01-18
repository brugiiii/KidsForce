<section class="section section--padding-bottom">
    <div class="container">
        <h2 class="section-title">
            <?= the_field('partners_title'); ?>
        </h2>
        <div class="partners-wrapper mx-auto col-lg-10 text-center">
            <p class="partners-text fw-bold">
                <?= the_field('partners_text'); ?>
            </p>
            <a href="" class="partners-button border-style">
                <?= translate_and_output('view_partners'); ?>
            </a>
        </div>
    </div>
</section>
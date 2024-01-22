<section class="section reviews" id="reviews">
    <div class="container">
        <h2 class="section-title reviews-title">
            <?= the_field('reviews_title'); ?>
        </h2>
        <div class="reviews-wrapper d-flex flex-wrap justify-content-between align-items-end">
            <p class="reviews-text mb-0">
                <?= the_field('reviews_text'); ?>
            </p>
            <?= get_template_part('templates/ctrlList'); ?>
        </div>
        <?= get_template_part('templates/reviewsList'); ?>
    </div>
</section>
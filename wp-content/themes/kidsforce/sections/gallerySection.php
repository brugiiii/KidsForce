<section class="gallery">
    <div class="container">
        <div class="section-title d-flex align-items-center justify-content-between">
            <h2 class="gallery-title mb-0">
                <?= the_field('gallery_title'); ?>
            </h2>
            <?= get_template_part('templates/ctrlList'); ?>
        </div>
        <div class="swiper gallery-swiper overflow-visible">
            <?= the_field('gallery'); ?>
        </div>
    </div>
</section>
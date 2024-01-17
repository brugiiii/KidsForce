<section class="section section--padding-bottom circles">
    <div class="container">
        <div class="section-title d-flex align-items-center justify-content-between">
            <h2 class="mb-0 circles-title">
                <?php the_field('circles_title'); ?>
            </h2>
            <?= get_template_part('templates/ctrlList'); ?>
        </div>
        <?= get_template_part('templates/circlesList'); ?>
    </div>
</section>
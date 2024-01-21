<ul class="faq-list mx-auto">
    <?php
    $args = array(
        'post_type' => 'faq',
        'posts_per_page' => -1,
        'order' => 'ASC',
    );

    $query = new WP_Query($args);
    $counter = 0;

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $counter++;
            ?>
            <li class="faq-list__item">
                <div class="faq-list__wrapper d-flex align-items-start align-items-lg-center justify-content-between gap-2">
                    <h3 class="faq-list__title">
                        <?= the_field('question'); ?>
                    </h3>
                    <div class="faq-icon position-relative">
                        <img class="faq-icon__arrow position-absolute <?= $counter < 2 ? 'rotated' : ''; ?>" src="<?= get_image('icon-arrow-bottom.svg'); ?>"
                             alt="arrow">
                        <svg class="faq-icon__bg" width="42" height="31">
                            <use href="<?= get_image('sprite.svg#icon-bg'); ?>"></use>
                        </svg>
                    </div>
                </div>
                <p class="faq-list__text mb-0">
                    <?= the_field('answer'); ?>
                </p>
            </li>
        <?php endwhile;
        wp_reset_query();
    else :
        echo 'Немає постів для відображення.';
    endif;
    ?>
</ul>
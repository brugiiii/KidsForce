<div class="swiper circles-swiper overflow-visible">
    <ul class="circles-list swiper-wrapper align-items-stretch">
        <?php
        $args = array(
            'post_type' => 'circles',
            'posts_per_page' => -1,
            'order' => 'DESC',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                $image_id = get_field('image');
                ?>
                <li class="circles-list__item swiper-slide">
                    <div class="circles-list__wrapper d-flex flex-column h-100">
                        <div class="circles-list__thumb overflow-hidden">
                            <?php echo wp_get_attachment_image($image_id, 'full', false, array('class' => '')); ?>
                        </div>
                        <div class="circles-list__content d-flex flex-column flex-grow-1">
                            <h3 class="circles-list__title position-relative z-0">
                                <?= the_field('title'); ?>
                            </h3>
                            <p class="circles-list__text mb-auto">
                                <?= the_field('text'); ?>
                            </p>
                            <span class="circles-list__age d-block">
                              <?= the_field('age'); ?>
                        </span>
                        </div>
                    </div>
                </li>
            <?php endwhile;
            wp_reset_query();
        else :
            echo 'Немає постів для відображення.';
        endif;
        ?>
    </ul>
</div>
<div class="swiper reviews-swiper col-10 ms-0 overflow-visible">
    <ul class="reviews-list swiper-wrapper align-items-stretch">
        <?php
        $args = array(
            'post_type' => 'reviews',
            'posts_per_page' => -1,
            'order' => 'DESC',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                ?>
                <li class="reviews-list__item swiper-slide">
                    <div class="reviews-list__thumb h-100">
                        <h3 class="reviews-list__title">
                            <?= the_field('name'); ?>
                        </h3>
                        <p class="reviews-list__text mb-0">
                            <?= the_field('review'); ?>
                        </p>
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
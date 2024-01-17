<div class="swiper circles-swiper overflow-visible">
    <ul class="circles-list swiper-wrapper">
        <?php
        $args = array(
            'post_type' => 'circles',
            'posts_per_page' => -1,
            'order' => 'DESC',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                ?>
                <li class="circles-list__item swiper-slide">
                    <div class="circles-list__thumb d-flex flex-column">
                        <h3 class="circles-list__tile position-relative z-0">
                            <?= the_field('title'); ?>
                        </h3>
                        <p class="circles-list__text mb-auto">
                            <?= the_field('text'); ?>
                        </p>
                        <span class="circles-list__age">
                              <?= the_field('age'); ?>
                        </span>
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
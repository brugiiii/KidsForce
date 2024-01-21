<div class="swiper reviews-swiper align-items-start col-lg-10 ms-lg-0 overflow-visible">
    <ul class="reviews-list swiper-wrapper">
        <?php
        $args = array(
            'post_type' => 'reviews',
            'posts_per_page' => -1,
            'order' => 'DESC',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                $review = get_field('review');
                $words = explode(' ', $review);
                $first_50_words = implode(' ', array_slice($words, 0, 50));
                $remaining_words = implode(' ', array_slice($words, 50));
                ?>
                <li class="reviews-list__item swiper-slide">
                    <div class="reviews-list__thumb h-100">
                        <h3 class="reviews-list__title">
                            <?= the_field('name'); ?>
                        </h3>
                        <p class="reviews-list__text mb-0">
                            <?= $first_50_words; ?>
                            <?php if ($remaining_words) : ?>
                                <span class="reviews-list__remaining-words is-hidden">
                                    <?= $remaining_words; ?>
                                </span>
                            <?php endif; ?>
                        </p>
                        <?php if ($remaining_words) : ?>
                            <button type="button" class="reviews-list__button fw-medium">
                                <?= translate_and_output('read_more'); ?>
                            </button>
                        <?php endif; ?>
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
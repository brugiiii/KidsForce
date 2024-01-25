<ul class="occupation-ctrl d-flex flex-wrap justify-content-between flex-shrink-0 align-self-start">
    <?php
    $args = array(
        'post_type' => 'occupation',
        'posts_per_page' => -1,
        'order' => 'ASC',
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $post_id = get_the_ID();
            ?>
            <li class="occupation-ctrl__item">
                <button type="button" class="occupation-ctrl__button position-relative" data-post-id="<?php echo esc_attr($post_id); ?>">
                    <svg class="occupation-ctrl__icon" width="108" height="147">
                        <use href="<?php get_image('sprite.svg#icon-occupation'); ?>"></use>
                    </svg>
                    <span class="occupation-ctrl__title fw-bold position-absolute start-50 translate-middle-x">
                        <?= the_title(); ?>
                    </span>
                </button>
            </li>
        <?php endwhile;
        wp_reset_query();
    else :
        echo 'Немає постів для відображення.';
    endif;
    ?>
</ul>

<ul class="price-list row">
    <?php
    $args = array(
        'post_type' => 'tariffs',
        'posts_per_page' => -1,
        'order' => 'ASC',
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            ?>
            <li class="price-list__item col-lg-3">
                <div class="price-list__thumb border border-black d-flex flex-column">
                    <h3 class="price-list__title text-center">
                        <?= the_field('title'); ?>
                    </h3>
                    <?= the_field('services'); ?>
                    <span class="price-list__price d-block mt-auto">
                        <?= translate_and_output('price') . ' ' . get_field('price') . ' &#8372;'; ?>
                    </span>
                    <a href="#cta" class="price-list__button d-block mx-auto">
                        <?= translate_and_output('signup'); ?>
                    </a>
                </div>
            </li>
        <?php endwhile;
        wp_reset_query();
    else :
        echo 'Немає постів для відображення.';
    endif;
    ?>
</ul>
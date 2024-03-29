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
            $title = get_field('title');
            $price = get_field('price');
            ?>
            <li class="price-list__item col-xl-3 col-md-6">
                <div class="price-list__thumb border border-black d-flex flex-column h-100">
                    <h3 class="price-list__title text-center">
                        <?= $title; ?>
                    </h3>
                    <?= the_field('services'); ?>
                    <span class="price-list__price d-block mt-auto">
                        <?= translate_and_output('price') . ' ' . $price . ' &#8372;'; ?>
                    </span>
                    <a href="#cta" class="price-list__button border-style d-block mx-auto feedback-js"
                       data-title="<?= 'Клієнт перейшов на форму з картки прайсу: ' . $title . ' (' . $price . ' &#8372;)'; ?>">
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
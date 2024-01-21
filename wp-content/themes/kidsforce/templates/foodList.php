<ul class="food-list d-flex flex-wrap justify-content-between">
    <?php
    $args = array(
        'post_type' => 'food',
        'posts_per_page' => -1,
        'order' => 'ASC',
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $text = get_field('text');
            ?>
            <li class="food-list__item">
                <?php if (!$text) {
                    ?>
                    <h3 class="food-list__title position-relative z-0">
                        <?= the_field('title'); ?>
                    </h3>
                    <?= the_field('list'); ?>
                    <?php
                } else {
                    ?>
                    <p class="food-list__text ms-auto ms-lg-0 mb-0">
                        <?= $text; ?>
                    </p>
                <?php
                }?>
            </li>
        <?php endwhile;
        wp_reset_query();
    else :
        echo 'Немає постів для відображення.';
    endif;
    ?>
</ul>


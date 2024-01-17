<ul class="groups-list row">
    <?php
    $args = array(
        'post_type' => 'groups',
        'posts_per_page' => -1,
        'order' => 'DESC',
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            ?>
            <li class="groups-list__item col-lg-4">
                <div class="groups-list__thumb border border-black">
                    <h3 class="groups-list__title text-center">
                        <?= the_field('title'); ?>
                    </h3>
                    <span class="groups-list__age d-block text-center">
                        <?= the_field('age'); ?>
                    </span>
                        <?= the_field('occupations'); ?>
                    <span class="groups-list__schedule d-block">
                        <?= translate_and_output('schedule'); ?>
                    </span>
                    <span class="groups-list__schedule d-block">
                        <?= the_field('schedule'); ?>
                    </span>
                    <a href="#cta" class="groups-list__button d-block fw-medium mx-auto">
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
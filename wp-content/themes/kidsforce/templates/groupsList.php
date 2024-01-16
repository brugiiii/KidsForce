<ul class="groups-list">
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
            <li class="groups-list__item">
            </li>
        <?php endwhile;
        wp_reset_query();
    else :
        echo 'Немає постів для відображення.';
    endif;
    ?>
</ul>
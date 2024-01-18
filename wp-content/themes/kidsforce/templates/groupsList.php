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
            $image_id = get_field('image');
            $title = get_field('title');
            $age = get_field('age');
            ?>
            <li class="groups-list__item col-lg-4">
                <div class="groups-list__wrapper border border-black position-relative">
                    <div class="groups-list__thumb border-bottom border-black overflow-hidden">
                        <?php echo wp_get_attachment_image($image_id, 'full', false, array('class' => 'groups-list__image')); ?>
                    </div>
                    <div class="groups-list__content">
                        <h3 class="groups-list__title text-center">
                            <?= $title; ?>
                        </h3>
                        <span class="groups-list__age d-block text-center">
                            <?= $age; ?>
                        </span>
                        <?= the_field('occupations'); ?>
                        <span class="groups-list__schedule d-block">
                            <?= translate_and_output('schedule'); ?>
                        </span>
                        <span class="groups-list__schedule d-block">
                            <?= the_field('schedule'); ?>
                        </span>
                        <a href="#cta" class="groups-list__button border-style d-block fw-medium mx-auto feedback-js" data-title="<?= 'Клієнт перейшов на форму з картки групи: ' . $title . ' ' . $age; ?>">
                            <?= translate_and_output('signup'); ?>
                        </a>
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
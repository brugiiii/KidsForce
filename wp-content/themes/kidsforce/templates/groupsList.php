<ul class="groups-list row d-lg-flex d-none">
    <?php
    $args = array(
        'post_type' => 'groups',
        'posts_per_page' => -1,
        'order' => 'DESC',
    );

    $query = new WP_Query($args);
    $counter = 0;

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $image_id = get_field('image');
            $title = get_field('title');
            $age = get_field('age');
            $subtitle = get_field('subtitle');
            $counter++;
            ?>
            <li class="groups-list__item <?= $counter === 5 ? 'col-xl-8' : 'col-xl-4 col-lg-6'; ?>">
                <div class="groups-list__wrapper border border-black position-relative h-100 d-flex  <?= $counter === 5 ? 'flex-lg-row-reverse flex-column align-items-lg-center' : 'flex-column'; ?>">
                    <div class="groups-list__thumb border-bottom border-black overflow-hidden">
                        <?php echo wp_get_attachment_image($image_id, 'full', false, array('class' => 'groups-list__image')); ?>
                    </div>
                    <div class="groups-list__content d-flex flex-column flex-grow-1">
                        <h3 class="groups-list__title text-center">
                            <?= $title; ?>
                        </h3>
                        <?php if ($subtitle) {
                            ?>
                            <p class="groups-list__subtitle text-center">
                                <?= $subtitle; ?>
                            </p>
                            <?php
                        } ?>
                        <span class="groups-list__age d-block text-center">
                            <?= $age; ?>
                        </span>
                        <?= the_field('occupations'); ?>
                        <span class="groups-list__schedule d-block mt-auto">
                            <?= translate_and_output('schedule'); ?>
                        </span>
                        <span class="groups-list__schedule d-block">
                            <?= the_field('schedule'); ?>
                        </span>
                        <a href="#cta" class="groups-list__button border-style d-block fw-medium mx-auto feedback-js"
                           data-title="<?= 'Клієнт перейшов на форму з картки групи: ' . $title . ' ' . $age; ?>">
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

<div class="swiper groups-swiper d-lg-none">
    <ul class="groups-list swiper-wrapper">
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
                $subtitle = get_field('subtitle');
                ?>
                <li class="groups-list__item swiper-slide">
                    <div class="groups-list__wrapper border border-black position-relative">
                        <div class="groups-list__thumb border-bottom border-black overflow-hidden">
                            <?php echo wp_get_attachment_image($image_id, 'full', false, array('class' => 'groups-list__image')); ?>
                        </div>
                        <div class="groups-list__content">
                            <h3 class="groups-list__title text-center">
                                <?= $title; ?>
                            </h3>
                            <?php if ($subtitle) {
                                ?>
                                <p class="groups-list__subtitle text-center">
                                    <?= $subtitle; ?>
                                </p>
                                <?php
                            } ?>
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
                            <a href="#cta"
                               class="groups-list__button border-style d-block fw-medium mx-auto feedback-js"
                               data-title="<?= 'Клієнт перейшов на форму з картки групи: ' . $title . ' ' . $age; ?>">
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
</div>
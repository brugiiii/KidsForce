<div class="d-lg-flex justify-content-lg-between team-wrapper">
    <div>
        <div class="swiper team-image-swiper">
            <ul class="team-list swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'team',
                    'posts_per_page' => -1,
                    'order' => 'DESC',
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        $image_id = get_field('image');
                        ?>
                        <li class="team-list__item swiper-slide overflow-visible">
                            <div class="team-list__thumb overflow-hidden">
                                <?= wp_get_attachment_image($image_id, 'full', false, array('class' => 'team-list__image')); ?>
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
    </div>

    <div>
        <div class="swiper team-content-swiper">
            <ul class="team-list swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'team',
                    'posts_per_page' => -1,
                    'order' => 'DESC',
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        ?>
                        <li class="team-list__item swiper-slide">
                            <div class="team-list__content d-flex flex-column h-100">
                                <h3 class="team-list__title mb-3">
                                    <?= the_field('name'); ?>
                                </h3>
                                <p class="team-list__position">
                                    <?= the_field('position'); ?>
                                </p>
                                <p class="team-list__text mb-0">
                                    <?= the_field('text'); ?>
                                </p>
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
    </div>
</div>




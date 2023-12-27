<div class="occupations-list">
    <?php
    $args = array(
        'post_type' => 'occupation',
        'posts_per_page' => -1,
        'order' => 'DESC',
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $sat_list = get_field('sat_list');
            ?>
            <div class="occupations-list__item">
                <div class="occupations-list__day">
                    <h3 class="occupations-list__title">
                        Monday
                    </h3>
                    <?php the_field('mon_list'); ?>
                </div>
                <div class="occupations-list__day">
                    <h3 class="occupations-list__title">
                        Tuesday
                    </h3>
                    <?php the_field('tue_list'); ?>
                </div>
                <div class="occupations-list__day">

                    <h3 class="occupations-list__title">
                        Wednesday
                    </h3>
                    <?php the_field('wed_list'); ?>
                </div>
                <div class="occupations-list__day">
                    <h3 class="occupations-list__title">
                        Thursday
                    </h3>
                    <?php the_field('thu_list'); ?>
                </div>
                <div class="occupations-list__day">
                    <h3 class="occupations-list__title">
                        Friday
                    </h3>
                    <?php the_field('fri_list'); ?>
                </div>
                <div class="occupations-list__day">
                    <h3 class="occupations-list__title">
                        Saturday
                    </h3>
                    <?php if ($sat_list) {
                        echo $sat_list;
                    } ?>
                </div>
            </div>
        <?php endwhile;
        wp_reset_query();
    else :
        echo 'Немає постів для відображення.';
    endif;
    ?>
</div>
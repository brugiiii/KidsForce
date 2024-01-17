<?php

$id = isset($_POST['id']) ? $_POST['id'] : '';

$args = array(
    'post_type' => 'occupation',
    'posts_per_page' => 1,
    'p' => $id,
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    $query->the_post();
    ?>
    <ul class="occupations-list position-relative">
        <li class="occupations-list__item d-flex align-items-center">
            <h3 class="occupations-list__title text-center mb-0">
                <?= translate_and_output('monday'); ?>
            </h3>
            <?= get_field('monday'); ?>
        </li>
        <li class="occupations-list__item d-flex align-items-center">
            <h3 class="occupations-list__title text-center mb-0">
                <?= translate_and_output('tuesday'); ?>
            </h3>
            <?= get_field('tuesday'); ?>
        </li>
        <li class="occupations-list__item d-flex align-items-center">
            <h3 class="occupations-list__title text-center mb-0">
                <?= translate_and_output('wednesday'); ?>
            </h3>
            <?= get_field('wednesday'); ?>
        </li>
        <li class="occupations-list__item d-flex align-items-center">
            <h3 class="occupations-list__title text-center mb-0">
                <?= translate_and_output('thursday'); ?>
            </h3>
            <?= get_field('thursday'); ?>
        </li>
        <li class="occupations-list__item d-flex align-items-center">
            <h3 class="occupations-list__title text-center mb-0">
                <?= translate_and_output('friday'); ?>
            </h3>
            <?= get_field('friday'); ?>
        </li>
    </ul>
    <?php
    wp_reset_postdata();
} else {
    echo 'No posts found.';
}

wp_die();

<?php
/*
Template Name: Home
*/
?>

<?= get_header(); ?>

<main>
    <?= get_template_part('sections/heroSection'); ?>
    <?= get_template_part('sections/benefitsSection'); ?>
    <?= get_template_part('sections/ctaSection'); ?>
    <?= get_template_part('sections/teamSection'); ?>
    <?= get_template_part('sections/occupationSection'); ?>
    <?= get_template_part('sections/groupsSection'); ?>
    <?= get_template_part('sections/circlesSection'); ?>
    <?= get_template_part('sections/priceSection'); ?>
    <?= get_template_part('sections/foodSection'); ?>
    <?= get_template_part('sections/reviewsSection'); ?>
    <?= get_template_part('sections/faqSection'); ?>
    <?= get_template_part('sections/contactsSection'); ?>
    <?= get_template_part('sections/gallerySection'); ?>
    <?= get_template_part('sections/partnersSection'); ?>

    <?= get_template_part('templates/topScroll'); ?>
</main>

<?= get_footer(); ?>




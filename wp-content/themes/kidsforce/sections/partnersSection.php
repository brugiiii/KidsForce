<?php
$link = get_field('partners_button');
?>

<section class="section partners">
    <div class="container">
        <h2 class="section-title">
            <?= the_field('partners_title'); ?>
        </h2>
        <div class="partners-wrapper mx-auto col-lg-10 text-center">
            <?= the_field('partners_text'); ?>
            <a href="<?= $link['url']; ?>" class="partners-button border-style d-inline-block"
               target="<?= $link['target']; ?>" rel="nofollow noopener noreferrer">
                <?= $link['title']; ?>
            </a>
        </div>
    </div>
</section>
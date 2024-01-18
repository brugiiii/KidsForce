<section class="hero">
    <div class="container">
        <h1 class="hero-title">
            <?= the_field('hero_title'); ?>
        </h1>
        <p class="hero-text fw-bold">
            <?= the_field('hero_undertitle'); ?>
        </p>
        <a href="#cta" class="hero-button d-inline-block border-style">
            <?= the_field('hero_button'); ?>
        </a>
    </div>
</section>

<style>
    .hero {
        background-image: url(<?= the_field('hero_image_mob'); ?>);
    }

    @media screen and (min-width: 768px) {
        .hero {
            background-image: url(<?= the_field('hero_image'); ?>);
        }
    }
</style>


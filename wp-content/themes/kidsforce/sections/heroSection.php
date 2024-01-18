<section class="hero">
    <div class="container">
        <h1 class="hero-title">
            <?= the_field('hero_title'); ?>
        </h1>
        <p class="hero-text">
            <?= the_field('hero_undertitle'); ?>
        </p>
        <button type="button" class="hero-button border-style">
            <?= the_field('hero_button'); ?>
        </button>
    </div>
</section>

<style>
    .hero {
        background-image: url(<?= the_field('hero_image'); ?>);
    }
</style>


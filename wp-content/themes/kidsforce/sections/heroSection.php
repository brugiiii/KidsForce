<section class="hero position-relative overflow-x-visible">
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
    <div class="hero-thumb video-thumb position-absolute top-50 start-50 translate-middle w-100 h-100 object-fit-cover z-n1">
        <video src="<?= get_field('hero_movie'); ?>" loop muted autoplay class="d-none d-lg-block"></video>
        <video src="<?= get_field('hero_movie_mob'); ?>" playsinline autoplay loop muted class="d-lg-none"></video>
    </div>
</section>
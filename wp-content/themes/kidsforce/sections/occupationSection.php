<section class="overflow-visible" id="occupation">
    <div class="container">
        <h2 class="section-title">
            <?= the_field('occupation_title'); ?>
        </h2>
        <div class="occupations-wrapper d-lg-flex">
            <?= get_template_part('templates/occupationsCtrl'); ?>
            <div class="occupations-content w-100"></div>
        </div>
    </div>
</section>


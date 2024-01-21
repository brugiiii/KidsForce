<section class="section">
    <div class="container">
        <h2 class="section-title">
            <?= the_field('food_title'); ?>
        </h2>
        <div class="food-wrapper border border-2 border-black">
            <?= get_template_part('templates/foodList'); ?>
        </div>
    </div>
</section>
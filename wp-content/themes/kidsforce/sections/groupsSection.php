<section class="section" id="groups">
    <div class="container">
        <div class="section-title d-flex justify-content-between align-items-center">
            <h2 class="mb-0">
                <?= the_field('groups_title'); ?>
            </h2>
            <?= get_template_part('templates/ctrlList'); ?>
        </div>
        <?= get_template_part('templates/groupsList'); ?>
    </div>
</section>
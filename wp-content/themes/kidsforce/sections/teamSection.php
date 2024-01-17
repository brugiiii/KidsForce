<section class="team section--padding-bottom">
    <div class="container">
        <div class="section-title d-flex justify-content-between align-items-center">
            <h2 class="mb-0 team-title">
                <?= the_field('team_title'); ?>
            </h2>
            <?= get_template_part('templates/ctrlList'); ?>
        </div>
        <?= get_template_part('templates/teamList'); ?>
    </div>
</section>
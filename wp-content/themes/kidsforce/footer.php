<footer class="footer">
    <div class="container d-flex">
        <div class="footer-wrapper">
            <div class="footer-content d-flex align-items-center justify-content-between">
                <?= custom_theme_logo(); ?>
                <?php get_template_part('templates/navigation', null, array('location' => 'menu-header')); ?>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <span class="copyright">
                    <?= translate_and_output('copyright'); ?>
                </span>
                <span class="design">
                    Design by <a href="https://recipe-agency.com.ua/" target="_blank" rel="noopener nofollow noreferrer">Recipe</a>
                </span>
            </div>
        </div>
        <?= get_template_part('templates/socialsList'); ?>
    </div>
</footer>
</div>

<?= get_template_part('templates/menu'); ?>

<?php wp_footer(); ?>

</body>

</html>
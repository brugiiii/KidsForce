<section class="section" id="faq">
    <div class="container">
        <h2 class="section-title faq-title text-center">
            <?= the_field('faq_title'); ?>
        </h2>
        <p class="faq-text text-center">
            <?= the_field('faq_text'); ?>
        </p>
        <?= get_template_part('templates/faqList'); ?>
    </div>
</section>

<?php
$number = get_field('number');
?>

<div class="backdrop is-hidden z-1" id="menu">
    <div class="menu d-flex flex-column ms-auto overflow-y-scroll">
        <?= the_custom_logo(); ?>
        <?= get_template_part('templates/languageSwitcher'); ?>
        <?= get_template_part('templates/navigation'); ?>
        <?= get_template_part('templates/socialsList'); ?>
        <a class="menu-link d-flex justify-content-center align-items-center" href="<?= $number['url']; ?>"
           target="<?= $number['target']; ?>" rel="nofollow noopener noreferrer">
            <svg class="menu-link__icon" width="28" height="28">
                <use href="<?php get_image('sprite.svg#icon-tel'); ?>"></use>
            </svg>
            <?= $number['title']; ?>
        </a>
    </div>
</div>
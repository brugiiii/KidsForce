<?php
$instagram = get_field('instagram', 17);
$facebook = get_field('facebook', 17);
$viber = get_field('viber', 17);
?>

<ul class="socials-list">
    <li class="socials-list__item">
        <a href="<?= $instagram['url']; ?>" target="<?= $instagram['target']; ?>" rel="nofollow noopener noreferrer"
           class="socials-list__link d-flex">
            <svg class="socials-list__icon" width="28" height="28">
                <use href="<?php get_image('sprite.svg#icon-instagram'); ?>"></use>
            </svg>
        </a>
    </li>
    <li class="socials-list__item">
        <a href="<?= $facebook['url']; ?>" target="<?= $facebook['target']; ?>" rel="nofollow noopener noreferrer"
           class="socials-list__link d-flex">
            <svg class="socials-list__icon" width="28" height="28">
                <use href="<?php get_image('sprite.svg#icon-facebook'); ?>"></use>
            </svg>
        </a>
    </li>
    <li class="socials-list__item">
        <a href="<?= $viber['url']; ?>" target="<?= $viber['target']; ?>" rel="nofollow noopener noreferrer"
           class="socials-list__link d-flex">
            <svg class="socials-list__icon" width="28" height="28">
                <use href="<?php get_image('sprite.svg#icon-viber'); ?>"></use>
            </svg>
        </a>
    </li>
</ul>
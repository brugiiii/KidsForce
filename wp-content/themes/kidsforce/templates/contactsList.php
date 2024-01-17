<?php
$address = get_field('address');
$number = get_field('number');
$email = get_field('email');
?>

<ul class="contacts-list">
    <li class="contacts-list__item">
        <svg class="contacts-list__icon" width="20" height="29">
            <use href="<?php get_image('sprite.svg#icon-location'); ?>"></use>
        </svg>
        <a class="contacts-list__link" href="<?= $address['url']; ?>" target="<?= $address['target']; ?>" rel="nofollow noopener noreferrer">
            <?= $address['title']; ?>
        </a>
    </li>
    <li class="contacts-list__item">
        <svg class="contacts-list__icon" width="27" height="27">
            <use href="<?php get_image('sprite.svg#icon-tel'); ?>"></use>
        </svg>
        <a class="contacts-list__link" href="<?= $number['url']; ?>">
            <?= $number['title']; ?>
        </a>
    </li>
    <li class="contacts-list__item">
        <svg class="contacts-list__icon" width="27" height="22">
            <use href="<?php get_image('sprite.svg#icon-mail'); ?>"></use>
        </svg>
        <a class="contacts-list__link" href="<?= $email['url']; ?>" target="<?= $email['target']; ?>" rel="nofollow noopener noreferrer">
            <?= $email['title']; ?>
        </a>
    </li>
</ul>
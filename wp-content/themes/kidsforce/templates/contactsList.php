<?php
$address = get_field('address');
$number = get_field('number');
$email = get_field('email');
?>

<ul class="contacts-list">
    <li class="contacts-list__item">
        <a class="contacts-list__link d-flex align-items-center" href="<?= $address['url']; ?>" target="<?= $address['target']; ?>" rel="nofollow noopener noreferrer">
            <svg class="contacts-list__icon" width="20" height="29">
                <use href="<?php get_image('sprite.svg#icon-location'); ?>"></use>
            </svg>
            <?= $address['title']; ?>
        </a>
    </li>
    <li class="contacts-list__item">
        <a class="contacts-list__link d-flex align-items-center" href="<?= $number['url']; ?>">
            <svg class="contacts-list__icon" width="27" height="27">
                <use href="<?php get_image('sprite.svg#icon-tel'); ?>"></use>
            </svg>
            <?= $number['title']; ?>
        </a>
    </li>
    <li class="contacts-list__item">
        <a class="contacts-list__link d-flex align-items-center" href="<?= $email['url']; ?>" target="<?= $email['target']; ?>" rel="nofollow noopener noreferrer">
            <svg class="contacts-list__icon" width="27" height="22">
                <use href="<?php get_image('sprite.svg#icon-mail'); ?>"></use>
            </svg>
            <?= $email['title']; ?>
        </a>
    </li>
</ul>
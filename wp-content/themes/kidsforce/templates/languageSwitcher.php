<?php
$languages = pll_the_languages(array('raw' => 1));
$current_language = pll_current_language();
?>

<ul class="languages-list d-flex">
    <?php foreach ($languages as $lang_code => $language) : ?>
        <li class="languages-list__item">
            <a class="<?php if ($lang_code === $current_language) {
                echo 'current';
            } ?> languages-list__link text-uppercase"
               href="<?php echo esc_url($language['url']); ?>"><?php echo esc_html($lang_code); ?></a>
        </li>
    <?php endforeach; ?>
</ul>
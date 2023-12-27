<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <?php wp_head(); ?>

    <title><?php wp_title(); ?></title>

</head>

<body style="visibility: hidden">

<div class="wrapper">
    <header class="header">
        <div class="container">

            <a class="logo" href="<?php echo esc_url(pll_home_url()); ?>">
                <?php echo esc_html(get_bloginfo('name')); ?>
            </a>

            <nav class="main-nav">
                <?php get_template_part('templates/navigation', null, array('location' => 'menu-header')); ?>
            </nav>

            <?php get_template_part('templates/languageSwitcher'); ?>
        </div>
    </header>

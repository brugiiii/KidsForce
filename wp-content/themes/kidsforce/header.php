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

            <div class="d-flex justify-content-center justify-content-lg-start flex-md-wrap position-relative">
                <?php the_custom_logo(); ?>

                <div class="header-wrapper align-items-md-center d-none d-md-flex flex-grow-1">
                    <nav class="main-nav">
                        <?php get_template_part('templates/navigation', null, array('location' => 'menu-header')); ?>
                    </nav>

                    <?php get_template_part('templates/languageSwitcher'); ?>
                </div>

                <button class="hamburger hamburger--collapse position-absolute top-50 translate-middle-y end-0 z-2" type="button">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </button>
            </div>

        </div>
    </header>


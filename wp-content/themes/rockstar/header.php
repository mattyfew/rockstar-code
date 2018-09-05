<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Rockstar Theme</title>
        <?php wp_head(); ?>
    </head>

    <?php
        if (is_front_page()):
            $rockstar_classes = array('homie', 'domie');
        else:
            $rockstar_classes = array('abboot');
        endif;
    ?>

    <body <?php body_class($rockstar_classes); ?>>
        <img class="hamburger-menu" src="<?php echo get_template_directory_uri(); ?>/img/hamburger-white.svg" />

        <!-- <?php wp_nav_menu(array('theme_location' => 'primary')); ?> -->

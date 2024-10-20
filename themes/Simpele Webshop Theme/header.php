<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="headernav">
            <a href="<?php echo site_url(); ?>" class="siteicon">
                <img class="icon" src="<?php echo get_theme_file_uri('images/icon.png'); ?>">
                <h1>Tech Shop</h1>
            </a>
            <?php 
            wp_nav_menu(array(
              'theme_location' => 'headerMenuLocation'
            ));
            ?>
        </header>
        <main>
<?php 

function simepelewebshop_files(){
    wp_enqueue_script('simepelewebshop_main_js', get_theme_file_uri('build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('simepelewebshop_main_styles', get_theme_file_uri('build/stylesheetMain.css'));
    wp_enqueue_style('simepelewebshop_extra_styles', get_theme_file_uri('build/stylesheetExtra.css'));
}

add_action('wp_enqueue_scripts', 'simepelewebshop_files');

function simepelewebshop_features(){
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation', 'Footer Menu Location');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'simepelewebshop_features')

?>
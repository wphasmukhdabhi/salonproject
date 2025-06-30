<?php

function my_theme_agency_scripts()
{
    wp_enqueue_style('my-theme-agency-style', get_stylesheet_uri());
    wp_enqueue_script('my-theme-agency-script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_agency_scripts');

function agency_menus()
{
    register_nav_menus([
        'main-menu' => 'Main Menu'
        // 'footer-menu' => 'Footer Menu'
    ]);
}
add_action('init', 'agency_menus');

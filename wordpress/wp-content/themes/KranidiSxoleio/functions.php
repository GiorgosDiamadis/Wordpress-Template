<?php
function dg_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

function menus()
{
    $locations = array(
        'header' => 'Header Menu',
        'footer' => 'Footer Menu',
    );

    register_nav_menus($locations);
}

function dg_registerStyles()
{

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('dg-css', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('dg-googleFont-primary', "https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap", array(), "1.0", 'all');
    wp_enqueue_style('dg-googleFont-secondary', "https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap", array(), "1.0", 'all');
}

function dg_registerScripts()
{
    wp_enqueue_script('dg-js', get_template_directory_uri() . "/main.js", array(), "", 'all', true);

}

add_action('after_setup_theme', 'dg_theme_support', 30);
add_action('wp_enqueue_scripts', 'dg_registerStyles', 30);
add_action('wp_enqueue_scripts', "dg_registerScripts", 30);
add_action('init', 'menus');

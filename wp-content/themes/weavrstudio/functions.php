<?php


function register_my_navmenu()
{
    register_nav_menus(array(
        'header' => __('Header', 'headernav'),
        'footer' => __('Footer', 'footernav'),
        '404' => __('404', '404nav')
    ));
}

add_action('init', 'register_my_navmenu', 1);

if (!function_exists('weavrstudio_setup')) {
    function weavrstudio_setup()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ));
    }
}

function add_mytheme_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('after_theme_setup', 'weavrstudio_setup', 0);
add_action('wp_enqueue_scripts', 'add_mytheme_scripts');

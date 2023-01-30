
<?php

function register_mynav()
{
    register_nav_menus(
        array(
        'header' => 'Header',
        'footer' => 'Footer',
        '404' => '404',
        )
    );
}


if (!function_exists('weavrsetup')) {
    function weavrsetup()
    {
        register_mynav();
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ));
    }
}

function add_myscripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('after_setup_theme', 'weavrsetup', 0);
add_action('wp_enqueue_scripts', 'add_myscripts');

require(__DIR__.'/shortcodes/teammates.php');
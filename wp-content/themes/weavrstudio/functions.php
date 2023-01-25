<?php

if (!function_exists('weavrstudio_setup')) {
    function weavrstudio_setup()
    {
        add_theme_support('post-thumbnails');
        register_nav_menus(array(
            'header' => "Header",
            'footer' => "Footer",
            '404' => "404",
        ));
    }
}
add_action('after_theme_setup', 'weavrstudio_setup');


<?php

get_header();
wp_nav_menu();
if(have_posts()) : the_post();
    the_content();
endif;
get_footer();
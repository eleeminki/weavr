<?php


function the_teammate()
{
    $the_query =  new WP_Query(array(
         'post_type' => 'teammates',
         'post_status' => 'publish',
         'post_per_page' => -1,
         'order' => 'ASC',
         'orderby' => 'menu_order'
     ));

    $i = 0;
    if ($the_query->have_posts()) {
        $box = '<div class="elementor-container elementor-column-gap-default">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $i++;
            $box.='<div class="elementor-column elementor-col-33 elementor-top-column elementor-element"  data-element_type="column" style="margin:44px;">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-element_type="widget" data-widget_type="image-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-image-box-wrapper">
                                    <figure class="elementor-image-box-img">
                                        <img decoding="async" src="' .do_shortcode('[acf field="picture"]'). '" title="profile" alt="" loading="lazy" style="max-height:360px;">
                                    </figure>
                                    <div class="elementor-image-box-content">
                                        <h3 class="elementor-image-box-title">'.get_the_title() .'<a href= "mailto: '.do_shortcode('[acf field="email"]') .'" style="color:inherit;"><i aria-hidden="true" class="far fa-envelope" style="margin:10px;"></i></a></h3>
                                        <h2 style="color:var( --e-global-color-primary );">'.do_shortcode('[acf field="role"]') .'</h2>
                                        <p class="elementor-image-box-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                    </div>
                                </div>		
                            </div>
                        </div>
                    </div>
            </div>';
            if ($i == 3) {
                $box.='</div><div class="elementor-container elementor-column-gap-default">';
                $i=0;
            }
        }
        wp_reset_postdata();
        return $box;
    }
}

add_shortcode('teammate', 'the_teammate');

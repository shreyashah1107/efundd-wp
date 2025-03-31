<?php

function add_theme_scripts()
{
    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '1.1', 'all');
    wp_enqueue_style( 'app', get_template_directory_uri() . '/assets/css/app.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style( 'developer', get_template_directory_uri() . '/assets/css/magiccursor.css', array(), '1.1', 'all');
    wp_enqueue_style( 'developer', get_template_directory_uri() . '/assets/css/developer.css', array(), '1.1', 'all');
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

function footer_js(){
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
    wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js');
}
add_action('wp_footer', 'footer_js');


function wp_get_menu_array($current_menu) {

    $array_menu = wp_get_nav_menu_items($current_menu);
    $menu = array();
    foreach ($array_menu as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID']      =   $m->ID;
            $menu[$m->ID]['title']       =   $m->title;
            $menu[$m->ID]['url']         =   $m->url;
            $menu[$m->ID]['children']    =   array();
        }
    }
    $submenu = array();
    foreach ($array_menu as $m) {
        if ($m->menu_item_parent) {
            $submenu[$m->ID] = array();
            $submenu[$m->ID]['ID']       =   $m->ID;
            $submenu[$m->ID]['title']    =   $m->title;
            $submenu[$m->ID]['url']  =   $m->url;
            $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
        }
    }
    return $menu;

}
//reCAPTCHA badge load on require pages only.
function block_recaptcha_badge() {
    if ( !is_page( array( 'contact-us','contact' ) ) ) {
        wp_dequeue_script( 'google-recaptcha' );
        wp_deregister_script( 'google-recaptcha' );
        add_filter( 'wpcf7_load_js', '__return_false' );
        add_filter( 'wpcf7_load_css', '__return_false' );
    }
}
add_action( 'wp_print_scripts', 'block_recaptcha_badge' );
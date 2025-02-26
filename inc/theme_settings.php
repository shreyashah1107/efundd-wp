<?php

if ( ! function_exists( 'fundd_theme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features
     *
     *  @since Terranova 1.0
     */
    function fundd_theme_setup(){

        /**
         * Create Custom Menus
         */
        register_nav_menus( array(
            'main'   => __( 'Business Menu', 'fundd' ),
            'corporate_menu'   => __( 'Corporate Menu', 'fundd' ),
            'personal_menu'   => __( 'Personal Menu', 'fundd' ),
         //   'top-header-menu'   => __( 'Top Header Menu', 'fundd' ),
            'footer' => __( 'Footer Menu', 'fundd' ),
            'footer_business_accounts' => __('Footer Business Accounts', 'fundd'),
            'footer_plus_crm' => __('Footer Plus CRM', 'fundd'),
            'footer_card_machines' => __('Footer Card Machines', 'fundd'),
            'footer_ecommerce_payments' => __('Footer Ecommerce Payments', 'fundd'),
            'footer_personal_account' => __('Footer Personal Account', 'fundd'),
            'footer_company' => __('Footer Company', 'fundd'),
            'footer_help_centre' => __('Footer Help Centre', 'fundd'),
            'footer_quick_links' => __('Footer Quick Links', 'fundd'),
        ) );
        /**
         * Load translations for fundd
         */
        load_theme_textdomain('fundd', get_template_directory() . '/languages');

        /**
         * Add Theme Options
         */
        add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video', 'link', 'status', 'chat' ) ); // Richmedia Supprt
        add_theme_support( 'custom-logo' ); // Custom logo
        add_theme_support( 'post-thumbnails' ); // Feature Imaged

        add_theme_support( 'automatic-feed-links' ); // Comments RSS Feed
        /**
         * Hide Admin Bar in User does Not have Admin Permissions
         */
        if ( ! current_user_can( 'manage_options' ) ) {
            show_admin_bar( false );
        }

    }
endif; // Terranova Theme Setup

add_action('after_setup_theme', 'fundd_theme_setup');
// Add an options page to the WP Admin when ACF Plugin is installed.

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-general-settings',
    ));

}

//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');


function block_frames()
{
    header('X-FRAME-OPTIONS: SAMEORIGIN');
}

add_action('send_headers', 'block_frames', 10);

function render_menu($menu_name)
{
    $locations = get_nav_menu_locations();
    if (isset($locations[$menu_name])) {
        $menu_id = $locations[$menu_name];
        $menu_items = wp_get_nav_menu_items($menu_id);

        if ($menu_items) {
            $menu = [];
            $child_items = [];

            foreach ($menu_items as $item) {
                // Top-level items
                if (empty($item->menu_item_parent)) {
                    $menu[$item->ID] = [
                        'ID' => $item->ID,
                        'title' => $item->title,
                        'url' => $item->url,
                        'description' => $item->description,
                        'classes' => $item->classes,
                        'children' => []
                    ];
                } else {
                    // Store child items temporarily
                    $child_items[$item->ID] = [
                        'ID' => $item->ID,
                        'title' => $item->title,
                        'url' => $item->url,
                        'description' => $item->description,
                        'classes' => $item->classes,
                        'children' => []
                    ];

                    // Second-level items
                    if (isset($menu[$item->menu_item_parent])) {
                        $menu[$item->menu_item_parent]['children'][$item->ID] = &$child_items[$item->ID];
                    }
                    // Third-level items
                    elseif (isset($child_items[$item->menu_item_parent])) {
                        $child_items[$item->menu_item_parent]['children'][] = &$child_items[$item->ID];
                    }
                }
            }
            return $menu;
        }
    }
    return [];
}

function remove_version_from_app_assets( $src ) {
    if ( strpos( $src, 'app.css' ) !== false || strpos( $src, 'app.js' ) !== false ) {
        $src = remove_query_arg( 'ver', $src );
    }
    return $src;
}
add_filter( 'style_loader_src', 'remove_version_from_app_assets', 10, 2 );
add_filter( 'script_loader_src', 'remove_version_from_app_assets', 10, 2 );


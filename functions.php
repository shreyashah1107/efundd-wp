<?php
include 'inc/theme_settings.php';
include 'inc/scripts.php';
include "inc/cpt.php";

function display_matching_menu() {
	if (is_front_page()){
		return "corporate_menu";
		die();
	}

    // List of menus to check
    $menus = ['main', 'corporate_menu', 'personal_menu'];

    // Get the current URL
    $url_parts = parse_url( home_url() );
    $current_url_with_query_string = $url_parts['scheme'] . "://" . $url_parts['host'] . add_query_arg( NULL, NULL );
    $locations = get_nav_menu_locations();
    // Loop through the menus
    foreach ($menus as $menu_slug) {
        $menu_id = $locations[$menu_slug];
        $menu_items = wp_get_nav_menu_items($menu_id);

        // Check if the current URL matches any menu item's URL
        if ($menu_items) {
            foreach ($menu_items as $menu_item) {
                if (trailingslashit($menu_item->url) === trailingslashit($current_url_with_query_string)) {
                    return $menu_slug; // Exit after displaying the matching menu
                    die();
                }
            }
        }
    }

    // Fallback: If no menu matches, you can display a default menu or a message
    // echo '<p>No matching menu found.</p>';
}

function allow_svg_gif_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['gif'] = 'image/gif';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_gif_upload');

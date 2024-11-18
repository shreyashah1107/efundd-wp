<?php

if ( ! function_exists('Events_post_type') ) {

// Register Events Post Type
function Events_post_type() {

$labels = array(
'name'                  => _x( 'Events', 'Post Type General Name', 'fundd' ),
'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'fundd' ),
'menu_name'             => __( 'Events', 'fundd' ),
'name_admin_bar'        => __( 'Events', 'fundd' ),
'archives'              => __( 'Event Archives', 'fundd' ),
'attributes'            => __( 'Event Attributes', 'fundd' ),
'parent_item_colon'     => __( 'Parent Event:', 'fundd' ),
'all_items'             => __( 'All Events', 'fundd' ),
'add_new_item'          => __( 'Add New Event', 'fundd' ),
'add_new'               => __( 'Add New Event', 'fundd' ),
'new_item'              => __( 'New Event', 'fundd' ),
'edit_item'             => __( 'Edit Event', 'fundd' ),
'update_item'           => __( 'Update Event', 'fundd' ),
'view_item'             => __( 'View Event', 'fundd' ),
'view_items'            => __( 'View Events', 'fundd' ),
'search_items'          => __( 'Search Event', 'fundd' ),
'not_found'             => __( 'Not found', 'fundd' ),
'not_found_in_trash'    => __( 'Not found in Trash', 'fundd' ),
'featured_image'        => __( 'Featured Image', 'fundd' ),
'set_featured_image'    => __( 'Set featured image', 'fundd' ),
'remove_featured_image' => __( 'Remove featured image', 'fundd' ),
'use_featured_image'    => __( 'Use as featured image', 'fundd' ),
'insert_into_item'      => __( 'Insert into Event', 'fundd' ),
'uploaded_to_this_item' => __( 'Uploaded to this Event', 'fundd' ),
'items_list'            => __( 'Events list', 'fundd' ),
'items_list_navigation' => __( 'Items Event navigation', 'fundd' ),
'filter_items_list'     => __( 'Filter Events list', 'fundd' ),
);
$args = array(
'label'                 => __( 'Event', 'fundd' ),
'description'           => __( 'Events', 'fundd' ),
'labels'                => $labels,
'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes' ),
'taxonomies'            => array( 'category', 'post_tag' ),
'hierarchical'          => true,
'public'                => true,
'show_ui'               => true,
'show_in_menu'          => true,
'menu_position'         => 5,
'menu_icon'             => 'dashicons-welcome-write-blog',
'show_in_admin_bar'     => true,
'show_in_nav_menus'     => true,
'can_export'            => true,
'has_archive'           => false,
'exclude_from_search'   => false,
'publicly_queryable'    => true,
'capability_type'       => 'post',
'show_in_rest'          => true,
);
register_post_type( 'Event', $args );

}
add_action( 'init', 'Events_post_type', 0 );

}

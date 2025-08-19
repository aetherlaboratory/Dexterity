<?php
// Register Custom Post Type
function apparel_post_type() {

	$labels = array(
		'name'                  => _x( 'Apparel', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Apparel', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Apparel', 'text_domain' ),
		'name_admin_bar'        => __( 'Apparel', 'text_domain' ),
		'archives'              => __( 'Apparel Archives', 'text_domain' ),
		'attributes'            => __( 'Apparel Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Apparel:', 'text_domain' ),
		'all_items'             => __( 'All Apparel', 'text_domain' ),
		'add_new_item'          => __( 'Add New Apparel', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Apparel', 'text_domain' ),
		'edit_item'             => __( 'Edit Apparel', 'text_domain' ),
		'update_item'           => __( 'Update Apparel', 'text_domain' ),
		'view_item'             => __( 'View Apparel', 'text_domain' ),
		'view_items'            => __( 'View Apparel', 'text_domain' ),
		'search_items'          => __( 'Search Apparel', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Apparel Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured Apparel Image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured Apparel Image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured Apparel image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Apparel', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Apparel', 'text_domain' ),
		'items_list'            => __( 'Apparel list', 'text_domain' ),
		'items_list_navigation' => __( 'Apparel list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Apparel list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Apparel', 'text_domain' ),
		'description'           => __( 'Apparel that i have designed', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessperson',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'apparel', $args );

}
add_action( 'init', 'apparel_post_type', 0 );
?>
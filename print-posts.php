<?php
// Register Custom Post Type
function print_post_type() {

	$labels = array(
		'name'                  => _x( 'Print Designs', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Print Design', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Print Designs', 'text_domain' ),
		'name_admin_bar'        => __( 'Print Design', 'text_domain' ),
		'archives'              => __( 'Print Archives', 'text_domain' ),
		'attributes'            => __( 'Print Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Print Design:', 'text_domain' ),
		'all_items'             => __( 'All Print Designs', 'text_domain' ),
		'add_new_item'          => __( 'Add New Print Design', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Print Design', 'text_domain' ),
		'edit_item'             => __( 'Edit Print Design', 'text_domain' ),
		'update_item'           => __( 'Update Print Design', 'text_domain' ),
		'view_item'             => __( 'View Print Design', 'text_domain' ),
		'view_items'            => __( 'View Print Designs', 'text_domain' ),
		'search_items'          => __( 'Search Print Designs', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Print Design', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured Print Design', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured Print Design', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured Print Design', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Print Design', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Print Design', 'text_domain' ),
		'items_list'            => __( 'Print Designs list', 'text_domain' ),
		'items_list_navigation' => __( 'Print Designs list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Print Designs list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Print Design', 'text_domain' ),
		'description'           => __( 'Print Designs that i have designed', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-id-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'print', $args );

}
add_action( 'init', 'print_post_type', 0 );
?>
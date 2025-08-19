<?php
// Register Custom Post Type
function digital_post_type() {

	$labels = array(
		'name'                  => _x( 'Digital Designs', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Digital Design', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Digital Designs', 'text_domain' ),
		'name_admin_bar'        => __( 'Digital Design', 'text_domain' ),
		'archives'              => __( 'Digital Archives', 'text_domain' ),
		'attributes'            => __( 'Digital Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Digital Design:', 'text_domain' ),
		'all_items'             => __( 'All Digital Designs', 'text_domain' ),
		'add_new_item'          => __( 'Add New Digital Design', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Digital Design', 'text_domain' ),
		'edit_item'             => __( 'Edit Digital Design', 'text_domain' ),
		'update_item'           => __( 'Update Digital Design', 'text_domain' ),
		'view_item'             => __( 'View Digital Design', 'text_domain' ),
		'view_items'            => __( 'View Digital Designs', 'text_domain' ),
		'search_items'          => __( 'Search Digital Designs', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Digital Design', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured Digital Design', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured Digital Design', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured Digital Design', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Digital Design', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Digital Design', 'text_domain' ),
		'items_list'            => __( 'Digital Designs list', 'text_domain' ),
		'items_list_navigation' => __( 'Digital Designs list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Digital Designs list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Digital Design', 'text_domain' ),
		'description'           => __( 'Digital Designs that i have designed', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-desktop',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'digital', $args );

}
add_action( 'init', 'digital_post_type', 0 );
?>
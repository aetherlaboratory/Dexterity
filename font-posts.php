<?php
// Register Custom Post Type
function font_post_type() {

	$labels = array(
		'name'                  => _x( 'Fonts', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Font', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Fonts', 'text_domain' ),
		'name_admin_bar'        => __( 'Font Design', 'text_domain' ),
		'archives'              => __( 'Font Archives', 'text_domain' ),
		'attributes'            => __( 'Font Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Font:', 'text_domain' ),
		'all_items'             => __( 'All Fonts', 'text_domain' ),
		'add_new_item'          => __( 'Add New Font', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Font', 'text_domain' ),
		'edit_item'             => __( 'Edit Font', 'text_domain' ),
		'update_item'           => __( 'Update Font', 'text_domain' ),
		'view_item'             => __( 'View Font', 'text_domain' ),
		'view_items'            => __( 'View Fonts', 'text_domain' ),
		'search_items'          => __( 'Search Fonts', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Font Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured Font Image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured Font Image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured Font image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Font', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Font', 'text_domain' ),
		'items_list'            => __( 'Font list', 'text_domain' ),
		'items_list_navigation' => __( 'Fonts list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Fonts list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Font', 'text_domain' ),
		'description'           => __( 'Font- Families that i have designed', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 4,
		'menu_icon'             => 'dashicons-editor-spellcheck',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'font', $args );

}
add_action( 'init', 'font_post_type', 0 );
?>
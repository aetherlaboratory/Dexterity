<?php
/**
 * Functions and definitions for the Dexterity theme.
 *
 * @link https://ae-lab.io
 *
 * @package Mothership
 * @since 1.2
 */


 
require_once get_template_directory() .'/cs-framework/cs-framework.php';
function get_cs_option($option_name, $default = '') {
    $options = get_option('_cs_options');
    return !empty($options[$option_name]) ? $options[$option_name] : $default;
}


function enqueue_woocommerce_scripts() {
    if ( class_exists( 'WooCommerce' ) ) {
        wp_enqueue_script( 'wc-add-to-cart' );
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_woocommerce_scripts' );


//This filter will change the add-to-cart button by adding the necessary Bootstrap classes while keeping the AJAX add-to-cart functionality intact.

add_filter( 'woocommerce_loop_add_to_cart_link', 'change_loop_add_to_cart_button', 10, 2 );

function change_loop_add_to_cart_button( $button, $product ) {
    $button_text = __("Add to cart", "woocommerce");
    $button = '<a href="' . $product->add_to_cart_url() . '" class="button alt ajax_add_to_cart btn btn-primary" data-product_id="' . $product->get_id() . '" aria-label="' . $button_text . '" rel="nofollow">' . $button_text . '</a>';

    return $button;
}





 function dex_studio_setup() {
    load_theme_textdomain( 'dex_studio', get_template_directory() . '/languages' );
  }
  add_action( 'after_setup_theme', 'dex_studio_setup' );
  



  
  

function exclude_pages_from_search( $query ) {
  if ( ! is_admin() && $query->is_main_query() && $query->is_search() ) {
    $query->set( 'post_type', array( 'post', 'product', 'brands' ) ); // search both posts and products
  }
}
add_filter( 'pre_get_posts', 'exclude_pages_from_search' );


  
  
  
  
  function animation_deps() {
    wp_register_style( 'animate-css','https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', false, '' );
    wp_enqueue_style( 'animate-css' );
      
      
      
  
     
  }
  add_action( 'wp_enqueue_scripts', 'animation_deps' );
  
  



  function main_enq() {
    wp_register_style( 'main-css',  get_stylesheet_directory_uri() .'/style.css', false, '' );
    wp_enqueue_style( 'main-css' );

	
	wp_register_style( 'woo-css',  get_stylesheet_directory_uri() .'/woocommerce.css', false, '' );
	wp_enqueue_style( 'woo-css' );

   
    wp_register_script( 'main-js',  get_stylesheet_directory_uri() .'/script.js', true, '' );
    wp_enqueue_script( 'main-js' );
	
 wp_register_style( 'xxl',  get_stylesheet_directory_uri() .'/css/xxl.css', array( 'main-css' ), '' );
 wp_enqueue_style( 'xxl' );

 wp_register_style( 'xl',  get_stylesheet_directory_uri() .'/css/xl.css', array( 'main-css' ), '' );
 wp_enqueue_style( 'xl' );

   wp_register_style( 'lg',  get_stylesheet_directory_uri() .'/css/lg.css', array( 'main-css' ), '' );
 wp_enqueue_style( 'lg' );

   wp_register_style( 'md',  get_stylesheet_directory_uri() .'/css/md.css', array( 'main-css' ), '' );
 wp_enqueue_style( 'md' );


   wp_register_style( 'sm',  get_stylesheet_directory_uri() .'/css/sm.css', array( 'main-css' ), '' );
 wp_enqueue_style( 'sm' );

 wp_register_style( 'xs',  get_stylesheet_directory_uri() .'/css/xs.css', array( 'main-css' ), '' );
 wp_enqueue_style( 'xs' );
 
 
 wp_register_style( 'mobile',  get_stylesheet_directory_uri() .'/css/mobile.css', array( 'main-css' ), '' );
 wp_enqueue_style( 'mobile' );
 
  wp_register_style( 'tablet',  get_stylesheet_directory_uri() .'/css/tablet.css', array( 'main-css' ), '' );
  wp_enqueue_style( 'tablet' );
 
 
 wp_register_style( 'laptop-desktop',  get_stylesheet_directory_uri() .'/css/laptop-desktop.css', array( 'main-css' ), '' );
 wp_enqueue_style( 'laptop-desktop' );

 wp_register_style( 'quote-icons',  get_stylesheet_directory_uri() .'/css/quote-icons.css', array( 'main-css' ), '' );
  wp_enqueue_style( 'quote-icons' );
 
   
  }
  add_action( 'wp_enqueue_scripts', 'main_enq' );



 function iconography() {

    wp_register_style( 'fontawesome',  get_stylesheet_directory_uri() .'/fonts/css/all.min.css', false, '1.1' );
    wp_enqueue_style( 'fontawesome' );

    wp_register_script( 'fa6pro-js',  get_stylesheet_directory_uri() .'/fonts/js/pro.min.js', true, '' );
    wp_enqueue_script( 'fa6pro-js' );

 }
 add_action( 'wp_enqueue_scripts', 'iconography' );








  function enqueue_bootstrap() {
	  
wp_register_style( 'bs-css',  get_stylesheet_directory_uri() .'/api/bootstrap/bootstrap.min.css', false, '' );
    wp_enqueue_style( 'bs-css' );
  
	 wp_register_style( 'sidebar',  get_stylesheet_directory_uri() .'/api/bootstrap/sidebar.css', array( 'bs-css' ), '' );
       wp_enqueue_style( 'sidebar' );
	 wp_register_style( 'offcanvas-css',  get_stylesheet_directory_uri() .'/api/bootstrap/offcanvas-navbar.css', array( 'bs-css' ), '' );
	 wp_register_script( 'offcanvas-js',  get_stylesheet_directory_uri() .'/api/bootstrap/offcanvas-navbar.js', true, '' );

	wp_register_script( 'bundle-bs',  get_stylesheet_directory_uri() .'/api/bootstrap/bootstrap.bundle.min.js', true, '' );
	wp_enqueue_script( 'bundle-bs' );
	//wp_register_script( 'modernizr-custom',  get_template_directory_uri() .'/api/bootstrap/modernizr.custom.js', array(), false, true );
	wp_register_script( 'popper-bs',  get_stylesheet_directory_uri() .'/api/bootstrap/popper.min.js', true, '' );
	wp_register_script( 'glide-js',  get_stylesheet_directory_uri() .'/js/glide/glide.min.js', true, '' );	;
	 wp_register_style( 'glide-core',  get_stylesheet_directory_uri() .'/js/glide/glide.core.min.css', false, '' );
	 wp_register_style( 'glide-theme',  get_stylesheet_directory_uri() .'/js/glide/glide.theme.min.css', false, '' );

	
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap' );



  function enqueue_fdb() {
    wp_register_style( 'fdb', get_stylesheet_directory_uri() .'/api/fdb/froala_blocks.min.css', array('bs-css') );
    wp_enqueue_style( 'fdb' );
  

}
add_action( 'wp_enqueue_scripts', 'enqueue_fdb' );







  function tattoo_grid() {
       wp_register_style( 'tattoo-grid-css',  get_stylesheet_directory_uri() .'/js/tattoo-grid/tattoo-grid.css', array( 'main-css' ), '' );
       wp_register_style( 'grid-style',  get_stylesheet_directory_uri() .'/js/tattoo-grid/tattoo-grid-style.css', array( 'main-css' ), '' );
      wp_register_script( 'modernizr-custom-tg',  get_template_directory_uri() .'/js/tattoo-grid/modernizr-custom.js', false, '' );
      	wp_register_script( 'masonry-tg',  get_stylesheet_directory_uri() .'/js/tattoo-grid/masonry.pkgd.min.js', array('modernizr-custom-tg'), '1.0', true);
wp_register_script( 'images-loaded',  get_stylesheet_directory_uri() .'/js/tattoo-grid/imagesloaded.pkgd.min.js',  array('modernizr-custom-tg'), '1.0', true);
	 wp_register_script( 'classie',  get_stylesheet_directory_uri() .'/js/tattoo-grid/classie.js',  array('modernizr-custom-tg'), '1.0', true);
     wp_register_script( 'tattoo-grid-js',  get_stylesheet_directory_uri() .'/js/tattoo-grid/main.js',  array('modernizr-custom-tg'), '1.0', true);
      
       
  }
add_action( 'wp_enqueue_scripts', 'tattoo_grid' );





function home_styles() {
    // only enqueue on site's index page
    if ( is_front_page() ) {
  
    }
}
add_action( 'wp_enqueue_scripts', 'home_styles' );

function logos_styles() {
    // only enqueue on site's index page
    if ( is_page( 'Logos' ) ) {

          wp_enqueue_style( 'tattoo-grid-css' );
            wp_enqueue_style( 'grid-style' );
        wp_enqueue_script( 'modernizr-custom-tg' );
          wp_enqueue_script( 'masonry-tg' );
        wp_enqueue_script( 'images-loaded' );
        wp_enqueue_script( 'classie' );
        wp_enqueue_script( 'tattoo-grid-js' );
        
    }
}
add_action( 'wp_enqueue_scripts', 'logos_styles' );

function digital_styles() {
    // only enqueue on site's index page
    if ( is_page( 'Digital' ) ) {

          wp_enqueue_style( 'tattoo-grid-css' );
            wp_enqueue_style( 'grid-style' );
        wp_enqueue_script( 'modernizr-custom-tg' );
          wp_enqueue_script( 'masonry-tg' );
        wp_enqueue_script( 'images-loaded' );
        wp_enqueue_script( 'classie' );
        wp_enqueue_script( 'tattoo-grid-js' );
        
    }
}
add_action( 'wp_enqueue_scripts', 'digital_styles' );

function printpage_styles() {
    // only enqueue on site's index page
    if ( is_page( 'Print' ) ) {

          wp_enqueue_style( 'tattoo-grid-css' );
            wp_enqueue_style( 'grid-style' );
        wp_enqueue_script( 'modernizr-custom-tg' );
          wp_enqueue_script( 'masonry-tg' );
        wp_enqueue_script( 'images-loaded' );
        wp_enqueue_script( 'classie' );
        wp_enqueue_script( 'tattoo-grid-js' );
        
    }
}
add_action( 'wp_enqueue_scripts', 'printpage_styles' );

function apparelpage_styles() {
    // only enqueue on site's index page
    if ( is_page( 'Apparel' ) ) {

          wp_enqueue_style( 'tattoo-grid-css' );
            wp_enqueue_style( 'grid-style' );
        wp_enqueue_script( 'modernizr-custom-tg' );
          wp_enqueue_script( 'masonry-tg' );
        wp_enqueue_script( 'images-loaded' );
        wp_enqueue_script( 'classie' );
        wp_enqueue_script( 'tattoo-grid-js' );
        
    }
}
add_action( 'wp_enqueue_scripts', 'apparelpage_styles' );













// function enqueue_account_page_styles() {
//   if ( is_account_page() ) {
// 
//   }
// }
// add_action( 'wp_enqueue_scripts', 'enqueue_account_page_styles' );
// 
// 
// 








  function site_menus() {
      
   wp_register_style( 'main-menu',  get_stylesheet_directory_uri() .'/menu.css', false, '' );
   wp_enqueue_style( 'main-menu' );
   
    wp_register_script( 'menu-js',  get_stylesheet_directory_uri() .'/menu.js', true, '' );
    wp_enqueue_script( 'menu-js' );
      
  
  }
  add_action( 'wp_enqueue_scripts', 'site_menus' );









function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


// Require the Likes/Dislikes related functions
require_once get_template_directory() . '/mothership-likes-dislikes-functions.php';








add_action( 'init', 'remove_woocommerce_breadcrumbs' );
function remove_woocommerce_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}




remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'custom_product_description', 20 );

function custom_product_description() {
    global $product;
    echo '<p class="single-summary">' . apply_filters( 'woocommerce_product_description', $product->get_description() ) . '</p>';
}

add_filter( 'woocommerce_short_description', '__return_false' );



add_filter( 'woocommerce_product_tabs', 'remove_product_tabs', 98 );
function remove_product_tabs( $tabs ) {
    unset( $tabs['description'] );
    unset( $tabs['additional_information'] );
    unset( $tabs['reviews'] );
    return $tabs;
}

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );







function remove_error_404_class( $classes ) {
  if ( is_404() ) {
    $classes = array_diff( $classes, array( 'error404' ) );
  }
  return $classes;
}
add_filter( 'body_class', 'remove_error_404_class', 20 );



// add tag support to pages
function tags_support_all() {
	register_taxonomy_for_object_type('post_tag', 'page');
}

// ensure all tags are included in queries
function tags_support_query($wp_query) {
	if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

// tag hooks
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');



// add_filter( 'get_template_part_preloader/preloader', 'my_custom_template_part_preloader' );
// 
// function my_custom_template_part_preloader( $file ) {
//     $file = 'preloader/preloader.php';
//     return $file;
// }


require_once get_template_directory() .'/logo-posts.php';
require_once get_template_directory() .'/digital-posts.php';
require_once get_template_directory() .'/print-posts.php';
require_once get_template_directory() .'/apparel-posts.php';
require_once get_template_directory() .'/font-posts.php';



function change_media_menu_position( $menu_order ) {
    $media_menu_slug = 'upload.php';

    // Remove the media menu item from the existing menu order
    $menu_order = array_diff( $menu_order, array( $media_menu_slug ) );

    // Define the position you want to insert the media menu item
    $insert_after_position = 8; // Adjust this number to the desired position - 1

    // Split the menu order into two parts, before and after the desired position
    $before_position = array_slice( $menu_order, 0, $insert_after_position );
    $after_position  = array_slice( $menu_order, $insert_after_position );

    // Add the media menu item to the new position and merge the menu order
    $new_menu_order = array_merge( $before_position, array( $media_menu_slug ), $after_position );

    return $new_menu_order;
}
add_filter( 'custom_menu_order', '__return_true' );
add_filter( 'menu_order', 'change_media_menu_position' );



require_once get_template_directory() .'/cart-counter.php';

require_once get_template_directory() .'/widgets.php';




//Create individual attribute pages for colors and sizes

function product_attributes_rewrite_rules() {
    // Colors
    $colors = array( 'pink', 'red', 'orange', 'yellow', 'green', 'blue', 'purple', 'black', 'gray', 'white', 'beige', 'brown', 'gold', 'silver', 'pattern' );

    foreach ( $colors as $color ) {
        add_rewrite_rule( "^color/{$color}/?$", 'index.php?product_attribute=' . urlencode( $color ), 'top' );
    }

    // Sizes
    $sizes = array( 'xsmall', 'small', 'medium', 'large', 'xlarge', 'xxlarge' );

    foreach ( $sizes as $size ) {
        add_rewrite_rule( "^size/{$size}/?$", 'index.php?product_size=' . urlencode( $size ), 'top' );
    }
}
add_action( 'init', 'product_attributes_rewrite_rules' );

function product_attributes_query_vars( $vars ) {
    $vars[] = 'product_attribute';
    $vars[] = 'product_size';
    return $vars;
}
add_filter( 'query_vars', 'product_attributes_query_vars' );

function product_attributes_template( $template ) {
    global $wp_query;

    if ( $wp_query->get( 'product_attribute' ) ) {
        $template = locate_template( array( 'page.php', 'page-' . $wp_query->get( 'product_attribute' ) . '.php', 'index.php' ) );
    }

    if ( $wp_query->get( 'product_size' ) ) {
        $template = locate_template( array( 'page.php', 'page-' . $wp_query->get( 'product_size' ) . '.php', 'index.php' ) );
    }

    return $template;
}
add_filter( 'template_include', 'product_attributes_template' );




	
	
	

//*** CREATES PAGINATION FOR SUBCATEGORY PAGES ***/
function subcategory_pagination_pre_get_posts($query) {
    if (!is_admin() && $query->is_main_query() && $query->is_tax('product_cat')) {
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $term_id = get_queried_object_id();
        
        $query->set('post_type', 'product');
        $query->set('posts_per_page', 12);
        $query->set('paged', $paged);
        $query->set('tax_query', array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'term_id',
                'terms' => $term_id
            )
        ));
    }
}
add_action('pre_get_posts', 'subcategory_pagination_pre_get_posts');

add_theme_support( 'post-thumbnails' );








<?php get_header( 'shop' ); ?>


<?php
	/**
	 * woocommerce_before_main_content hook.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 */
	do_action( 'woocommerce_before_main_content' );
?>

<div class="row">
<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>);" class="col-6" />
<div class="col-5">
	<h1><?php echo get_the_title(); ?></h1>
	<h2><?php 
	$product = wc_get_product( get_the_ID() );
	echo wc_price( wc_get_price_to_display( $product ) );?>
</h2>
	<span><?php echo get_the_date('m/d/Y'); ?></span>
	<?php
	$categories = get_the_category();
	if (!empty($categories)) {
	$category_names = array_map(function($cat) { return $cat->name; }, $categories);
	echo implode(', ', $category_names);
	}
	?>
	<?php echo the_content();?>
	





	<?php
	$product = wc_get_product( get_the_ID() );
	
	if ( $product && $product->is_purchasable() && $product->is_in_stock() ) {
		?>
		<a href="<?php echo esc_url( $product->add_to_cart_url() ); ?>"
		   data-quantity="1"
		   class="btn btn-lg btn-outline-success button ajax_add_to_cart add_to_cart_button"
		   data-product_id="<?php echo esc_attr( $product->get_id() ); ?>"
		   data-product_sku="<?php echo esc_attr( $product->get_sku() ); ?>"
		   aria-label="<?php echo esc_attr( $product->add_to_cart_description() ); ?>">
			<?php echo esc_html( $product->add_to_cart_text() ); ?>
		</a>
		<?php
	}
	?>


	
	
</div><!-- col-5 -->
</div>

	<?php
	/**
	 * woocommerce_after_main_content hook.
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	do_action( 'woocommerce_after_main_content' );
?>

<?php get_footer( 'shop' ); ?>
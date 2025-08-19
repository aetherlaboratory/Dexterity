<?php
function mytheme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Sidebar', 'mytheme' ),
        'id'            => 'footer-sidebar',
        'description'   => __( 'Widgets in this area will be displayed in the footer.', 'mytheme' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'mytheme_widgets_init' );
?>
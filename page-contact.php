 <?php get_header();?>
<?php get_template_part( 'preloader/preloader' );?>
<h1 class="text-center minty animate__animated animate__fadeInLeft animate__delay-1s"><?php the_title();?></h1>
<hr class="animate__animated animate__fadeInLeft animate__delay-1s">

<div class="col-10 col-lg-8 mx-auto">
<?php echo do_shortcode( '[gravityform id="6" title="true"]' );?>
</div>
		


<?php get_footer();?>
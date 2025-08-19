<?php get_header(); ?>
<?php get_template_part( 'preloader/preloader' );?>
<div class="container my-5">
  <div class="row">
    <div class="col-md-11 mx-auto">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>

    </div><!-- /.col-md-8 -->

    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div><!-- /.col-md-4 -->
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>

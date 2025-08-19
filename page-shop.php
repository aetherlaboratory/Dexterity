<?php get_header(); ?>
<?php get_template_part("preloader/preloader"); ?>
<h1 class="text-center minty animate__animated animate__fadeInLeft animate__delay-1s"><?php the_title(); ?></h1>
<hr class="animate__animated animate__fadeInLeft animate__delay-1s">




<div class="container-fluid">


<div class="row text-center mt-5">
	<?php
	$args = array(
	'post_type' => 'product',
	'posts_per_page' => 4,

);
$query = new WP_Query($args);
if ($query->have_posts()) : ?>
<?php while ($query->have_posts()) : $query->the_post(); ?>
	
<div class="col-3">
<img alt="image" class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>">
<h3><strong><?php the_title();?></strong></h3>
<p>
	<?php
	$categories = get_the_category();
	if (!empty($categories)) {
	$category_names = array_map(function($cat) { return $cat->name; }, $categories);
	echo implode(', ', $category_names);
	}
	?>
</p>
<p><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


</div>
</div>

<!-- End 4 Products -->
<?php
$args = array(
'post_type' => 'product',
'posts_per_page' => 1,
'offset' => 4,

);
$query = new WP_Query($args);
if ($query->have_posts()) : 
while ($query->have_posts()) : $query->the_post(); ?>

<section class="fdb-block bg-dark">
  <div class="container">
	<div class="row align-items-center">
	  <div class="col-12 col-md-6 mb-4 mb-md-0">
		<img alt="image" class="img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>">
	  </div>
	  <div class="col-12 col-md-6 col-lg-5 ml-md-auto text-left">
		<h1><?php the_title(); ?></h1>
		<p class="lead"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
		<div class="d-flex col-8 gx-5">
		<p><a class="btn btn-primary mt-4" href="https://www.froala.com">Add To Cart</a></p>
		<p><a class="ms-3 btn btn-outline-primary mt-4" href="<?php the_permalink(); ?>">More Details</a></p>
	    </div>
	  </div>
	</div>
  </div>
</section>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>





<?php if (have_posts()):
  while (have_posts()):
    the_post(); ?>

<?php the_content(); ?>
<?php
  endwhile;
endif; ?>





<?php get_footer(); ?>

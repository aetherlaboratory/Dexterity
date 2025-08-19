
<?php
				$args = array(
				'post_type' => 'logo', // Assuming 'photos' is your CPT
				'posts_per_page' => 8,
				'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
				'order' => 'ASC', // Ascending order
				'orderby' => 'date' // Order by date
				);
				$query = new WP_Query($args);?>
				<?php if ($query->have_posts()) : ?>
				<?php $counter = 0; // Initialize the counter ?>
				<?php while ($query->have_posts()) : $query->the_post(); ?>
				<?php $counter++; // Increment the counter ?>

<div class="modal" id="logo-modal<?php echo $counter; ?>" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
	<div class="modal-content bg-dark text-light">
		<!-- inside modal -->
	<button type="button" class="btn-success btn-close end-0 text-end me-2 mt-2 position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
	
	<div class="row vh-100 col-12 align-items-center justify-content-center">
<div class="col-6">
<img class="col-10 me-0 end-0 ms-auto text-end d-block" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>">
</div>


<div class="col-5 ms-3">
<h1><?php the_title(); ?></h1>
<h5><?php
$categories = get_the_category();
if (!empty($categories)) {
$category_names = array_map(function($cat) { return $cat->name; }, $categories);
echo implode(', ', $category_names);
}
?></h5>
<?php echo the_content(); ?>
<small><?php echo get_the_date('m/d/Y'); ?></small>
</div>
	  <!-- modal end -->
</div><!-- row -->
	</div>
  </div>
</div>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<div class="mx-auto position-relative d-block text-center">
<span>No logo posts found.</span>
</div>
<?php endif; ?>







<?php
				$args = array(
				'post_type' => 'digital', // Assuming 'photos' is your CPT
				'posts_per_page' => 8,
				'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
				'order' => 'ASC', // Ascending order
				'orderby' => 'date' // Order by date
				);
				$query = new WP_Query($args);?>
				<?php if ($query->have_posts()) : ?>
				<?php $counter = 0; // Initialize the counter ?>
				<?php while ($query->have_posts()) : $query->the_post(); ?>
				<?php $counter++; // Increment the counter ?>

<div class="modal" id="digital-modal<?php echo $counter; ?>" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
	<div class="modal-content bg-dark text-light">
		<!-- inside modal -->
	<button type="button" class="btn-success btn-close end-0 text-end me-2 mt-2 position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
	
	<div class="row vh-100 col-12 align-items-center justify-content-center">
<div class="col-6">
<img class="col-10 me-0 end-0 ms-auto text-end d-block" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>">
</div>


<div class="col-5 ms-3">
<h1><?php the_title(); ?></h1>
<h5><?php
$categories = get_the_category();
if (!empty($categories)) {
$category_names = array_map(function($cat) { return $cat->name; }, $categories);
echo implode(', ', $category_names);
}
?></h5>
<?php echo the_content(); ?>
<small><?php echo get_the_date('m/d/Y'); ?></small>
</div>
	  <!-- modal end -->
</div><!-- row -->
	</div>
  </div>
</div>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<div class="mx-auto position-relative d-block text-center">
<span>No logo posts found.</span>
</div>
<?php endif; ?>










<?php
				$args = array(
				'post_type' => 'print', // Assuming 'photos' is your CPT
				'posts_per_page' => 8,
				'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
				'order' => 'ASC', // Ascending order
				'orderby' => 'date' // Order by date
				);
				$query = new WP_Query($args);?>
				<?php if ($query->have_posts()) : ?>
				<?php $counter = 0; // Initialize the counter ?>
				<?php while ($query->have_posts()) : $query->the_post(); ?>
				<?php $counter++; // Increment the counter ?>

<div class="modal" id="print-modal<?php echo $counter; ?>" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
	<div class="modal-content bg-dark text-light">
		<!-- inside modal -->
	<button type="button" class="btn-success btn-close end-0 text-end me-2 mt-2 position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
	
	<div class="row vh-100 col-12 align-items-center justify-content-center">
<div class="col-6">
<img class="col-10 me-0 end-0 ms-auto text-end d-block" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>">
</div>


<div class="col-5 ms-3">
<h1><?php the_title(); ?></h1>
<h5><?php
$categories = get_the_category();
if (!empty($categories)) {
$category_names = array_map(function($cat) { return $cat->name; }, $categories);
echo implode(', ', $category_names);
}
?></h5>
<?php echo the_content(); ?>
<small><?php echo get_the_date('m/d/Y'); ?></small>
</div>
	  <!-- modal end -->
</div><!-- row -->
	</div>
  </div>
</div>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<div class="mx-auto position-relative d-block text-center">
<span>No logo posts found.</span>
</div>
<?php endif; ?>





<?php
				$args = array(
				'post_type' => 'apparel', // Assuming 'photos' is your CPT
				'posts_per_page' => 8,
				'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
				'order' => 'ASC', // Ascending order
				'orderby' => 'date' // Order by date
				);
				$query = new WP_Query($args);?>
				<?php if ($query->have_posts()) : ?>
				<?php $counter = 0; // Initialize the counter ?>
				<?php while ($query->have_posts()) : $query->the_post(); ?>
				<?php $counter++; // Increment the counter ?>

<div class="modal" id="apparel-modal<?php echo $counter; ?>" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
	<div class="modal-content bg-dark text-light">
		<!-- inside modal -->
	<button type="button" class="btn-success btn-close end-0 text-end me-2 mt-2 position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
	
	<div class="row vh-100 col-12 align-items-center justify-content-center">
<div class="col-6">
<img class="col-10 me-0 end-0 ms-auto text-end d-block" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>">
</div>


<div class="col-5 ms-3">
<h1><?php the_title(); ?></h1>
<h5><?php
$categories = get_the_category();
if (!empty($categories)) {
$category_names = array_map(function($cat) { return $cat->name; }, $categories);
echo implode(', ', $category_names);
}
?></h5>
<?php echo the_content(); ?>
<small><?php echo get_the_date('m/d/Y'); ?></small>
</div>
	  <!-- modal end -->
</div><!-- row -->
	</div>
  </div>
</div>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<div class="mx-auto position-relative d-block text-center">
<span>No logo posts found.</span>
</div>
<?php endif; ?>
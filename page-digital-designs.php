<?php get_header();?>
<?php get_template_part( 'preloader/preloader' );?>
<h1 class="text-center minty animate__animated animate__fadeInLeft animate__delay-1s"><?php the_title();?></h1>
<hr class="animate__animated animate__fadeInLeft animate__delay-1s">

<div class="container-fluid">
<div class="col-12">
<div class="row text-center col-12">

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


<div class="col-12 col-md-6 col-lg-3 my-5">
<a class="image-link" data-bs-toggle="modal" data-bs-target="#digital-modal<?php echo $counter; ?>" href="#"><img class="w-75 rounded-2 mx-auto" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>" /></a>

<h2><?php the_title();?></h2>
<small><?php echo get_the_date('m/d/Y'); ?></small>
<p class="col-10 mx-auto"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
<h5 class="fs-5 text-mute">
<?php
$categories = get_the_category();
if (!empty($categories)) {
$category_names = array_map(function($cat) { return $cat->name; }, $categories);
echo implode(', ', $category_names);
}
?></h5>
</div>


<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<div class="mx-auto position-relative d-block text-center">
<span>No logo posts found.</span>
</div>
<?php endif; ?>







</div>
<!-- /grid -->
<div class="preview">
<button class="action action--close"><i class="fa-solid fa-times"></i><span class="text-hidden">Close</span></button>
<div class="description description--preview"></div>
</div>
<!-- /preview -->
</div>
<!-- /content -->

</div>
<?php get_footer();?>

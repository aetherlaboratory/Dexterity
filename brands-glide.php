
<div class="glide brands pt-3" style="box-shadow: 0 33px 28px 17px rgba(0, 0, 0, 0.8);">
  <div class="glide__track" data-glide-el="track">
    <ul class="glide__slides brand-list">   

    <?php
    $args = array(
        'post_type' => 'brands',
        'posts_per_page' => 21,
        'orderby' => 'title',
        'order'   => 'ASC'
    );
    $query = new WP_Query($args); ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

      <li class="brand-link glide__slide slide">
    <img class="d-block mx-auto position-relative" src="<?php the_post_thumbnail_url();?>" alt="">
    <br>
    <!--<span class="brand-text d-block"><?php the_title();?></span>-->
  </li>

  
  <?php endwhile; ?>
    <?php wp_reset_query(); ?>




    </ul>
  </div>

  <div class="glide__arrows" data-glide-el="controls">
    <button class="glide__arrow glide__arrow--left btn btn-dark" data-glide-dir="<">prev</button>
    <button class="glide__arrow glide__arrow--right btn btn-dark " data-glide-dir=">">next</button>
  </div>

  </div>






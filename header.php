<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Required Core Stylesheet -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/preloader/preloader.css">
<!-- jQuery CDN -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/smoothness_jquery-ui.css">
<script src="<?php bloginfo('template_url'); ?>/js/jquery-ui.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/preloader/preloader.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Atomic+Age&family=Audiowide&family=Bruno+Ace&family=Bungee+Hairline&family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Comfortaa:wght@300;400;500;600;700&family=DotGothic16&family=Flow+Block&family=Flow+Circular&family=Noto+Sans+Symbols+2&family=Orbitron:wght@400;500;600;700;800;900&family=Press+Start+2P&family=Raleway+Dots&family=Rationale&family=Rubik+Glitch&family=Rubik+Maze&family=Share+Tech+Mono&family=VT323&display=swap" rel="stylesheet">


<?php
// You can add or change the conditions here depending on your needs
if (is_front_page()) {
// Code for the front page
}  elseif (is_page(array('logos','digital', 'print', 'apparel'))) {
?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/tattoo-grid/tattoo-grid-style.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/tattoo-grid/tattoo-grid.css" />
<script src="<?php bloginfo('template_url'); ?>/js/tattoo-grid/modernizr-custom.js"></script>
<?php
// Code for the sculptures page
} elseif (is_page('typefaces')) {

// Code for the sculptures page
} elseif (is_page('shop')) {

// Code for the sculptures page
} elseif (is_page('collection')) {

} else {
// Code for all other pages
}
?>


<?php wp_head(); ?>
</head>
<?php get_template_part( 'svg-icons' );?>

<body>
<div class="position-absolute apex start-0 top-0 ms-3">
<a href="/home"><svg class="icon" style="width:3em; max-height:4em;">
  <use xlink:href="#site-logo"></use>
</svg>
</a></div>





<div id="wrapper">
<article class="col-12 container-fluid px-0 mx-0">

<div class="position-relative">

<button class="menu-btn hover-bg-minty position-fixed top-0 mt-1 me-0 px-3 end-0 translate-end
animate__animated animate__fadeInRight animate__delay-.5s"><i class="py-3 fs-5 c-white fas fa-bars"></i></button>
</div>
<?php get_header();?>
<?php 
$about_banner = get_cs_option('about_banner');
$about_img = get_cs_option('about_image');
$skills_img = get_cs_option('skills_img');
?>


<img class="w-100" style="height:auto;" src="<?php echo esc_url($about_banner); ?>" alt="" title="" width="1440" height="600">

<div class="row align-items-center justify-content-between m-0">
<div class="col-12 col-lg-6">
<h2 class="ps-3">About Us</h2>
<p class="p-3 fs-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
Excepteur sint occaecat cupidatat non proident,
sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
</div>
<div class="col-12 col-lg-6 row">
<img style="object-fit:cover; object-position:center;" class="mx-0 px-0 col" src="<?php echo esc_url($about_img); ?>" alt="" title="" width="600" height="600">
</div><!-- row -->


<div class="row align-items-center justify-content-between m-0">
<div class="col-12 col-lg-6 order-2 order-lg-1 row">
<img style="object-fit:cover; object-position:center;" class="mx-0 px-0 w-100" src="<?php echo esc_url($skills_img); ?>" alt="" title="" width="600" height="600">
</div>
<div class="col-12 col-lg-6 order-1 order-lg-2">
<h2 class="ps-3">Skills</h2>
<ul class="p-3 fs-4 skills">
    <li>Fine Art/Illustration <span>(27 Years)</span></li>
    <li>Branding/Identity <span>(18 Years)</span></li>
    <li>Apparel Design <span>(18 Years)</span></li>
    <li>Web Design/Development <span>(12 Years)</span></li>
    <li>Motion Graphics/2D Animation <span>(2 Years)</span></li>
    <li>3D Modeling/Texturing <span>(1 Year)</span></li>

</ul>
</div>
</div><!-- row -->

<div class="py-5 container-fluid">
<h2 class="text-center">Tools</h2>
 <?php
    $tools = [
        ['ps', 'Adobe Photoshop', 'Photo Editing/Image Manipulation/Fashion Design'],
        ['aill', 'Adobe Illustrator', 'Graphic Design/Web Design/Typography'],
         ['dime', 'Adobe Dimension', '3D Mockup/Packaging Design'],
          ['subs', 'Adobe Substance', '3D Painting/Texturing'],
        ['ind', 'Adobe Indesign', 'Book Editing/Publishing'],
         ['anim', 'Adobe Animate', 'Frame By Frame Animation'],
        ['ae', 'Adobe After Effects', 'Motion Graphics/Advanced Animation'],
        ['pc', 'Procreate', '(iPad Pro) Digital Painting/CGI'],
         ['pcd', 'Procreate Dreams', 'Digital HandDrawn Animation'],
        ['afd', 'Affinity Designer', '(iPad Pro) Vector Design'],
        ['blen', 'Blender 3D', '3D Modeling/Sculpting'],
        ['mj', 'MidJourney', 'Generative Ai Image/Video'],
    ];

    // Break into chunks of 4 items per row
    $chunks = array_chunk($tools, 4);
    foreach ($chunks as $row) :
    ?>
       <div class="row text-left mt-5">
      <?php foreach ($row as $skill) : ?>
      <div class="col-12 col-sm-6 col-lg-3 mb-4">
        <div class="row">
          <div class="col-2 me-2">
             <svg class="icon about-icon"><use xlink:href="#<?php echo esc_attr($skill[0]); ?>"></use></svg>
          </div>
          <div class="col-9">
            <h3><strong><?php echo esc_html($skill[1]); ?></strong></h3>
            <p><?php echo esc_html($skill[2]); ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
  </div>
</div>





<!-- Start General Site Newsletter -->

    <section class="fdb-box bg-dark text-light p-3 border-top border-bottom border-light border-2">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-lg-8">
          <h2>Need A Design?</h2>
          <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
        </div>
        <div class="col-12 col-lg-2 text-center">
                     <button class="btn btn-primary" type="button">Quote</button>
            </div>
          </div>
          
        </section>

    </section>


<!-- End General Site Newsletter -->



<?php get_footer();?>
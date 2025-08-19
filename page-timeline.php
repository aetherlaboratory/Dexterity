<?php get_header();?>
<?php get_template_part( 'preloader/preloader' );?>
<h1 class="text-center minty animate__animated animate__fadeInLeft animate__delay-1s"><?php the_title();?></h1>
<hr class="animate__animated animate__fadeInLeft animate__delay-1s">


<label class="mx-auto d-block mx-auto"><h1 class="text-center my-5">Past</h1></label>
<div class="w-100 h-100 position-absolute">
<div class="line bg-success position-absolute d-block start-0 end-0 mx-auto"
style="width:.5em; height:230vh;"
></div>
</div>

		


<div class="col-12 row timeline-diagram text-light p=3">
	
	
	
	<div class="row col-12 justify-content-start">
<div class="left-card card col-3 rounded-4 ms-5 start-0">
<div class="card-header"><label class="date">1992</label></div>
<div class="card-body">
<h4 classs="project-event strong"><u>Birthdate (Life)</u></h4><br>
<span classs="project-event">Kings County Hospital (NYC)</span>
</div>
</div>
</div><!-- row -->


<div class="spacer w-100 my-5"></div>


<div class="mt-5 row col-12 justify-content-end">
<div class="right-card card col-3 rounded-4 me-0 end-0">
	<div class="card-header"><label class="date">2010</label></div>
	<div class="card-body">
	<h4 classs="project-event"><u>High School Graduation <br> (Life Event)</u></h4><br>
	<span classs="project-event">Boys & Girls High School (NYC)</span>
	</div>
	</div>
	</div><!-- row -->

<div class="spacer w-100 my-5"></div>


<div class="row col-12 justify-content-start">
	<div class="left-card card col-3 rounded-4 ms-5 start-0">
	<div class="card-header"><label class="date">2012</label></div>
	<div class="card-body">
	<h4 classs="project-event strong"><u>Graphic Design Internship <br> (Life Event)</u></h4><br>
	<span classs="project-event">Artful Designz (NYC)</span>
	</div>
	</div>
	</div><!-- row -->
	
	
<div class="spacer w-100 my-5"></div>



<div class="mt-5 row col-12 justify-content-end">
	<div class="right-card card col-3 rounded-4 me-0 end-0">
		<div class="card-header"><label class="date">2012</label></div>
		<div class="card-body">
		<h4 classs="project-event"><u>Enrolled in College (Life Event)</u></h4><br>
		<span classs="project-event">Art Institute of NYC (NYC)</span>
		</div>
		</div>
		</div><!-- row -->




<div class="spacer w-100 my-5"></div>



<div class="row col-12 justify-content-start">
	<div class="left-card card col-3 rounded-4 ms-5 start-0">
	<div class="card-header"><label class="date">2012 - Present</label></div>
	<div class="card-body">
	<h4 classs="project-event strong"><u>Freelance Graphic Design</u></h4><br>
	<span classs="project-event">Dexterity Studio (Online)</span>
	</div>
	</div>
	</div><!-- row -->
	
	












</div><!-- timeline -->

		
<label class="mx-auto d-block mx-auto"><h1 class="text-center my-5">Present</h1></label>



		
  <div class="row container px-0 mx-auto">
	<div class="container col-md-12 mx-auto px-0">

	  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	 
		<?php the_content(); ?>
	  <?php endwhile; endif; ?>

	</div><!-- /.col-md-8 -->

	<div class="col-md-4">
	  <?php  // get_sidebar();?>
	</div><!-- /.col-md-4 -->
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>

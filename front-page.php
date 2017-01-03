<?php get_header(); ?>

<div class="img-bg text-center" id="img1">
	<div class="container">
		<div class="row">
		
		<div class="col-xs-12" id="brand">

		<img src="<?php bloginfo('template_directory'); ?>/img/Logo.png" id='logo' alt=''>
		<h1 id='name' style='font-size: 50px'>MICHAEL J STOKES</h1>
		<!-- <hr style="border-color: #fff; width:50%; border-width:5px; "> -->
		<p id='subtitle'>Front-End Developer</p>
			</div>
		</div>
	</div>
</div>

<div class="content-block text-center parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/img/GrandCentral.jpg">	
<div class="container">	
<div class="row">
<div class="col-xs-12" id="testimonials">

	<?php 
	query_posts('cat=12&showposts=1');
	if(have_posts()) {
		while(have_posts()) {
			the_post();?>

			<p><?php the_content(); ?></p>

			<?php 
			}
		}

		 ?>
	
</div>									
</div>
</div>	
</div>

<div class="img-bg samples_of_work text-center" id='img2'>
	<div class="container-fluid">
	<div class="row">
	<div class="col-xs-12" id="work_samples">

	<?php 

	query_posts('cat=90&showposts=1');
	if(have_posts()) {
		while(have_posts()) {
			the_post();
		
	 ?>

	 <p><?php the_content(); ?></p>

	 <?php
	 } 

	 } 

	 ?>

	</div>			
	</div>	
	</div>	
</div>	


<div class="services parallax-window">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12" id="my_services">
			<!-- 	<h1 class="text-center">

				<?php 
				$cat_id = 13;
					echo get_cat_name($cat_id);
					 ?></h1> -->
				
			
					<?php 
					query_posts('cat=13&showposts=1');
					if(have_posts()) {
						while(have_posts()) {
							the_post();?>

					<p><?php the_content(); ?></p>
					

					<?php

						}
					}



					 ?>
				

			</div>
		</div>
	</div>
</div>



<!-- <div class="featured-work">
<div class="container-fluid">
<div class="row">
<div class="col-xs-12">
<h1 class="text-left">
	Featured work
</h1>

<div class="col-xs-3"></div>
<div class="col-xs-3"></div>
<div class="col-xs-3"></div>


</div>	
</div>	
</div>
</div>

 -->




<?php get_footer(); ?>
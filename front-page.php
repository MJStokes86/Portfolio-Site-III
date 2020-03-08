<?php get_header(); ?>

<div class="img-bg text-center" id="img1">
	<div class="container">
		<div class="row">
		
		<div class="col-xs-12" id="brand">

		<img src="<?php bloginfo('template_directory'); ?>/img/Logo.png" id='logo' alt='Michael J. Stokes'>
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
<div class="col-xs-12 text-center" id="testimonials">

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

	<br>	
	<br>	
	
<h3>mjstokes.com presents</h3> <br>
<br>
<br>	

<div class="victoria-title text-center">
<h2>The Victoria</h2>
</div>

		<br>	
<br>	


<a href="http://mjstokes.com/victoria" target="_blank"><img src="<?php 	bloginfo('template_directory'); ?>/img/victoria.jpg" alt="The Victoria" width="300" height="169" class="aligncenter size-medium wp-image-410" /></a>

<br>	
<br>	

<div class="desktop">

	
<p>A sleek all in one portfolio site for the aspiring model. <br>It's clean, sexy, and classy. <br>100% mobile friendly
<a href="http://mjstokes.com/victoria">mjstokes.com/victoria</a>. <br> New sites are coming soon!</p>

</div>

<div class="mobile">
	
<p>A sleek all in one portfolio site for the aspiring model. <br>It's clean, sexy, and classy. <br>100% mobile friendly
<a href="http://mjstokes.com/victoria">mjstokes.com/victoria</a>. <br> New sites are coming soon!</p>
</div>







<!-- 
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
 -->



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
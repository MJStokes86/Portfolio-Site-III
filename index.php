<?php get_header(); ?>

<div class="img-bg text-center" id="img1">
	<div class="container">
		<div class="row">
		
		<div class="col-xs-12" id="brand">

<<<<<<< HEAD
		<img src="<?php bloginfo( 'template_directory' ); ?>/lib/img/Logo.png" id='logo' alt='Michael J. Stokes'>
=======
		<img src="<?php bloginfo('template_directory'); ?>/img/Logo.png" id='logo' alt=''>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
		<h1 id='name' style='font-size: 50px'>MICHAEL J STOKES</h1>
		<!-- <hr style="border-color: #fff; width:50%; border-width:5px; "> -->
		<p id='subtitle'>Front-End Developer</p>
			</div>
		</div>
	</div>
</div>

<<<<<<< HEAD
<div class="content-block text-center parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo( 'template_directory' ); ?>/lib/img/GrandCentral.jpg">	
=======
<div class="content-block text-center parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/img/GrandCentral.jpg">	
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
<div class="container">	
<div class="row">
<div class="col-xs-12 text-center" id="testimonials">

<<<<<<< HEAD
	<?php
	query_posts( 'cat=16&showposts=1' );
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			?>

			<p><?php the_content(); ?></p>

			<?php
		}
	}

	?>
=======
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
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
	
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

<<<<<<< HEAD
<div class="nutrition-club-title text-center">
<h2>The Nutrition Club</h2>
=======
<div class="victoria-title text-center">
<h2>The Victoria</h2>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
</div>

		<br>	
<br>	


<<<<<<< HEAD
<a href="http://mjstokes.com/nutrition-club" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/lib/img/nutrition-club.jpg" alt="The Nutrition Club" width="300" height="169" class="aligncenter size-medium wp-image-410" /></a>
=======
<a href="http://mjstokes.com/victoria" target="_blank"><img src="<?php 	bloginfo('template_directory'); ?>/img/victoria.jpg" alt="" width="300" height="169" class="aligncenter size-medium wp-image-410" /></a>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

<br>	
<br>	

<div class="desktop">

	
<<<<<<< HEAD
<p>A Herbalife Nutrition Club theme site <br>It's clean, professional, and easy to navigate. <br>100% mobile friendly.

<br>
<br>

<div class="nutrition-club-link ghost-button"><a href="http://mjstokes.com/nutrition-club" target="_blank">Visit Site</a></div>
<div class="nutrition-club-link ghost-button"><a href="https://github.com/MJStokes86/Nutrition-Club"  target="_blank">Source Code</a></div>

<br><br> New sites are coming soon!</p>
=======
<p>A sleek all in one portfolio site for the aspiring model. <br>It's clean, sexy, and classy. <br>100% mobile friendly
<a href="http://mjstokes.com/victoria">mjstokes.com/victoria</a>. <br> New sites are coming soon!</p>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

</div>

<div class="mobile">
	
<<<<<<< HEAD
<p>A Herbalife Nutrition Club theme site.</p><p>It's clean, professional, and easy to navigate.</p><p>100% mobile friendly.</p><p>New sites are coming soon!</p>
<div class="nutrition-club-link ghost-button"><a href="http://mjstokes.com/nutrition-club"  target="_blank">Visit Site</a></div>
<br>
<br>
<div class="nutrition-club-link ghost-button"><a href="https://github.com/MJStokes86/Nutrition-Club-WordPress-"  target="_blank">Source Code</a></div></a>
=======
<p>A sleek all in one portfolio site for the aspiring model. <br>It's clean, sexy, and classy. <br>100% mobile friendly
<a href="http://mjstokes.com/victoria">mjstokes.com/victoria</a>. <br> New sites are coming soon!</p>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
</div>







<<<<<<< HEAD


<!-- 
	<?php

	query_posts( 'cat=90&showposts=1' );
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();

			?>

	 <p><?php the_content(); ?></p>

			<?php
		}
	}

	?>
=======
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
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
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

<<<<<<< HEAD
				<?php
				$cat_id = 13;
					echo get_cat_name( $cat_id );
				?>
					 </h1> -->
				
			
					<?php
					query_posts( 'cat=14&showposts=1' );
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
							?>
=======
				<?php 
				$cat_id = 13;
					echo get_cat_name($cat_id);
					 ?></h1> -->
				
			
					<?php 
					query_posts('cat=13&showposts=1');
					if(have_posts()) {
						while(have_posts()) {
							the_post();?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

					<p><?php the_content(); ?></p>
					

<<<<<<< HEAD
							<?php
=======
					<?php
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

						}
					}



<<<<<<< HEAD
					?>
=======
					 ?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
				

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




<<<<<<< HEAD
<?php get_footer(); ?>
=======
<?php get_footer(); ?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

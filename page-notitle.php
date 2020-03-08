<<<<<<< HEAD
<?php

/*
=======
<?php 

/*

>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
Template Name: Page No Title

*/


get_header(); ?>

<<<<<<< HEAD
	<?php

	if ( have_posts() ) :

		while ( have_posts() ) :
			the_post();
			?>
		 

		<h1>This is my static title</h1>
			<small>Posted on: <?php the_time( 'F j, Y' ); ?> at <?php the_time( 'g:i a' ); ?>, in<?php the_category(); ?></small>
=======
	<?php 

	if(have_posts()):

		while(have_posts()): the_post();  ?> 

		<h1>This is my static title</h1>
			<small>Posted on: <?php the_time('F j, Y');  ?> at <?php the_time('g:i a'); ?>, in<?php the_category(); ?></small>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

			
			<p><?php the_content(); ?></p>

			<hr>


<<<<<<< HEAD
			<?php
		endwhile;
=======
		<?php endwhile;
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a

	endif;


	?>

<<<<<<< HEAD
<?php get_footer(); ?>
=======
<?php get_footer(); ?>
>>>>>>> eeda3f6a7304f0a3c3a9b64ecc6e15072a27fd8a
